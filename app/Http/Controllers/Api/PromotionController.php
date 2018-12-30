<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use App\Category;
use App\Menu;
use App\Promotion;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use URL;
use App\Repository\Transformers\MenuTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class PromotionController extends ApiController
{
    public function promos() {

        $promotion = Promotion::all();

        foreach($promotion as $promo) {
            $promo->image = URL::asset('images/'.$promo->image);
        }

        return $this->respond([

            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'successful!',
            'promos' => $promotion,
        ]);

    }
}
