<?php

namespace App\Http\Controllers\Api;

use DB;
use Illuminate\Http\Request;
use App\Transformers\CustomerTransformer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Customer;
use Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function register(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email|unique:customers',
            'password'  => 'required',
            'phone'     => 'required'
        ]);

        $customer = $customer->create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'api_token' => bcrypt($request->email),
            'phone'     => $request->phone
        ]);

        $response = fractal()
                    ->item($customer)
                    ->transformWith(new CustomerTransformer)
                    ->toArray();

        return response()->json($response, 201);
    }

    public function login(Request $request, Customer $customer)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // return response()->json(['error' => true, 'message'=> 'Wrong Credentials'], 401);
            return fractal()
                    ->item($customer)
                    ->transformWith(new CustomerTransformer)
                    ->toArray();
        }

        $customer = $customer->find(Auth::user()->id);

        return fractal()
                    ->item($customer)
                    ->transformWith(new CustomerTransformer)
                    ->toArray();
    }
}
