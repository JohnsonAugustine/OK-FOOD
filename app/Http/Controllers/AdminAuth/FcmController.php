<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Fcm;

class FcmController extends Controller
{
    public function index() {
        
        return view('admin.notifications.index');
    }

    public function store(Request $request) {

        $customers = Customer::all();
        $title = $request->title;
        $body = $request->body;

        $arr = array();
        foreach($customers as $customer) {
            //$arr[] = $customer->fcm_token;
            $arr[] = "cYhhPZviFHo:APA91bF6nlCbdDjqHZqjk1F57M8ce0h7rUEO-RjASi5DvGHxNufMMMmMk2yjML1VHfqSV783divYsyOS3XoyLoWscHJKQbZpz4X6EPyHUx2WZkEWGvP2-eGXo4tssSo6tTq8zJ3jWOn8";
        }

        Fcm::to($arr)->notification(['title' => $title, 'body' => $body])->send();

        return redirect()->route('admin.notifications');
    }
}
