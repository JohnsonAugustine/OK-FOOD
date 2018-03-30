<?php

namespace App\Transformers;

use App\Customer;
use App\ApiRespone;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    public function transform(Customer $customer)
    {
        return [
        'id'          => $customer->id,
        'name'        => $customer->name,
        'email'       => $customer->email,
        'created_at'  => $customer->created_at->toDateTimeString(),
        'api_token'   => $customer->api_token,
        'phone'       => $customer->phone,
    ];
        // $response = [
        //     'error'  => false,
        //     'message' => 'Sign In Successfully',
        // ];
        // return $response;
    }
}
