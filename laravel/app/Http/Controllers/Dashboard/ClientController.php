<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('dashboard.clients.index', ['clients'=> $clients]);
    }


    public function store(StoreClientRequest $request){
        // $inputs =  $request->all();
        // $service = new Client();
        // $service->name = $inputs['name'];
        // $service->price = $inputs['price'];
        // $service->description = $inputs['description'];
        // $service->save();
        // Alert::info(' الخدمات', 'تم حفظ الخدمة بنجاح');
        // return redirect()->route('services.index');
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
}
