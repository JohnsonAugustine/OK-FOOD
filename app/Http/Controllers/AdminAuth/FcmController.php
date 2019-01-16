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
            $arr[] = $customer->fcm_token;
        }

        Fcm::to($arr)->notification(['title' => $title, 'body' => $body])->send();

        return redirect()->route('admin.notifications');
    }
}
