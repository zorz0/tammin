<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Feature;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(10, ['id', 'name', 'price', 'image']);
        return view('dashboard.services.index', ['services' => $services]);
    }

    public function create()
    {
        $features = Feature::get(['id', 'name']);
        return view('dashboard.services.create', compact('features'));
    }

    public function store(StoreServiceRequest $request)
    {

       

        DB::transaction(function () use ( $request): void {
            $service = Service::create([
                'name' => $request->name,
                'price' => $request->price,
                'image' => uploadImage($request->image, Service::PATH)
            ]);
        
            $service->features()->attach($request->feature_id);
        });


        // if ($service) {
            Alert::success("تم اضافة الخدمه  بنجاح", "تم");
        // } else {

        //     Alert::error('خطا', "لم يتم الحفظ");
        // }
        return redirect()->route('services.index');
    }

    public function edit(Service $service)
    {
        $service->with('features');
        $features = Feature::get(['id', 'name']);
        return view('dashboard.services.edit', compact('features','service'));
    }
    public function update(StoreServiceRequest $request, Service $service)
    {
       
        DB::transaction(function () use ($service, $request): void {
           $service->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => uploadImage($request->image, Service::PATH)
            ]);
        
            
            $service->features()->sync($request->feature_id);


           
        });
        Alert::info(' الخدمات', 'تم تعديل الخدمة بنجاح');
        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
       
        DB::transaction(function () use ($service): void {
        $service->features()->detach();
        $service->delete();
        });
        Alert::info(' الخدمات', 'تم حذف الخدمة بنجاح');
        return redirect()->route('services.index');
    }
}
