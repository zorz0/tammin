<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    public function index() {
        $settings = Setting::get(['id','logo','description','website_name','footer_desc','seo_desc','seo_title']);
        return view('dashboard.settings.index', ['settings'=> $settings]);
    }


public function edit(Setting $setting){
    return view('dashboard.settings.edit',compact('setting'));
}

public function update(UpdateSettingRequest $request,Setting $setting){
     
   $logo=$request->hasFile('logo')?uploadImage($request->logo,Setting::PATH,$setting->logo):$setting->logo;
  $updates_setting=  $setting->update([
     'seo_title'=>$request->seo_title,
        'website_name'=>$request->website_name,
        'description'=>$request->description,
        'footer_desc'=>$request->footer_desc,
        'seo_desc'=>$request->seo_desc,
        'logo'=>$logo
    ]);
    if(  $updates_setting){
        Alert::success('تم التحديث بنجاح','نج التديث');

    }else{

Alert::error('خطا', 'لم يتم التحديث');
    }
    return redirect()->back();
}



}
