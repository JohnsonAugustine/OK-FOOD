<?php

namespace App\Http\Controllers\Api;

use App\Order;
use App\OrderDetail;
use App\Customer;
use App\Category;
use App\Menu;
use App\Tax;
use App\Repository\Transformers\TaxTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class TaxController extends ApiController
{
    protected $taxTransformer;

    public function __construct(TaxTransformer $taxTransformer)
    {
        $this->taxTransformer = $taxTransformer;
    }


    public function getTax() {

        $tax = Tax::all()->first();

        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'success!',
            'tax' => $this->taxTransformer->transform($tax),
        ]); 
    }

    public function tes() {
        echo "TES";
    }

}
