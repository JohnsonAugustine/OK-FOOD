<?php

namespace App\Transformers;
use App\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
  public function transform(Customer $customer)
  {
    return [
        'name'        => $customer->name,
        'email'       => $customer->email,
        'created_at'  => $customer->created_at,
        'api_token'   => $customer->api_token,
        'phone'       => $customer->phone,
    ];
  }
}
