<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::paginate(1,['id','name','price','description']);
        return view('dashboard.services.index', ['services' => $services]);
    }

    public function create(){
        return view('dashboard.services.create');
    }

    public function store(StoreServiceRequest $request){
        $inputs =  $request->all();
        $service = new Service();
        $service->name = $inputs['name'];
        $service->price = $inputs['price'];
        $service->description = $inputs['description'];
        $service->save();
        Alert::info(' الخدمات', 'تم حفظ الخدمة بنجاح');
        return redirect()->route('services.index');
    }

    public function edit($service_id){
        $service = Service::whereId($service_id)->firstOrFail();
        return view('dashboard.services.edit' , ['service' => $service]);
    }
    public function update(StoreServiceRequest $request){
        $inputs = $request->all();
        $service =Service::whereId($inputs['id'])->update(['name'=>$inputs['name'] , 'description'=> $inputs['description'] , 'price' => $inputs['price']]);
        Alert::info(' الخدمات', 'تم تعديل الخدمة بنجاح');
        return redirect()->route('services.index');
    }

    public function destroy(Service $service) {
        $service->delete();
        Alert::info(' الخدمات', 'تم حذف الخدمة بنجاح');
        return redirect()->route('services.index');
    }

}
