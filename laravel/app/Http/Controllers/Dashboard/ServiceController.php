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
        $services = Service::paginate(1, ['id', 'name', 'price', 'image']);
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
        
        Alert::success("تم اضافة الخدمه  بنجاح", "تم");
        return redirect()->route('services.index');
    }

    public function edit(Service $service)
    {
        $feature = Feature::get(['id', 'name']);
        return view('dashboard.services.edit', compact('features','service'));
    }
    public function update(StoreServiceRequest $request)
    {
        $inputs = $request->all();
        $service = Service::whereId($inputs['id'])->update(['name' => $inputs['name'], 'description' => $inputs['description'], 'price' => $inputs['price']]);
        Alert::info(' الخدمات', 'تم تعديل الخدمة بنجاح');
        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        Alert::info(' الخدمات', 'تم حذف الخدمة بنجاح');
        return redirect()->route('services.index');
    }
}
