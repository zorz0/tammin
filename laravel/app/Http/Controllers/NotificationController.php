<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function get_unreaded_notifications_ajax(Request $request){
        $inputs = $request->all();
        $notifications = Notification::where('is_seen' , 0)->select('content' , 'client_id' , 'id')->get();
        if($notifications->count() != $inputs['old_counter']){
            $content =view('dashboard.notifications.get_notifications_content', [
                'notifications' => $notifications,
            ])->render();
            $data = ['status'=> '1','counter' => $notifications->count() , 'content' => $content];
            return response()->json($data);
        }else {
            $data = ['status' => 0];
            return response()->json($data);
        }
    }
}
