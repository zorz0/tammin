<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Client;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $clients=Client::count();
        $services=Service::count();
        $settings=Setting::count();
        return view('dashboard.index',compact('services','clients','settings'));
    }
}
