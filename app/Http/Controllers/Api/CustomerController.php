<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(Customer $customer)
    {
        $customer = $customer->all();

        return response()->json($customer);
    }
}
