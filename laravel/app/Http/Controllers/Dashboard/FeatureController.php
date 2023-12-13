<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{

    public function index()
    {
        $features = Feature::paginate(10, ['id', 'name']);
        return view('dashboard.features.index', ['features' => $features]);
    }

    public function create()
    {
        return view('dashboard.features.create');
    }

    public function store(FeatureRequest $request)
    {
        $feature = Feature::create([
            'name' => $request->name
        ]);


        if ($feature) {
            Alert::success("تم اضافة الميزه بنجاح", "تم");
        } else {

            Alert::error('خطا', "لم يتم الحفظ");
        }
        return redirect()->route('features.index');
    }

    public function edit(Feature $feature)
    {
      
        return view('dashboard.features.edit', ['feature' => $feature]);
    }
    public function update(FeatureRequest $request,Feature $feature)
    {
        
        $feature =$feature->update([
            'name' => $request->name
        ]);


        if ($feature) {
            Alert::success("تعديل  الميزه بنجاح " , "تم");
        } else {

            Alert::error('خطا','لم يتم التحديث');
        }
        return redirect()->back();
    }

    public function destroy(feature $feature)
    {
       $feature= $feature->delete();
        
        if ($feature) {
            Alert::success("تم الحذف" , "تم");
        } else {

            Alert::error('خطا',"لم يتم الحذف");
        }
        return redirect()->back();
    }
}
