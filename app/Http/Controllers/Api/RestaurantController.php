<?php
namespace App\Http\Controllers\Api;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests;
use JWTAuth;
use Response;
use App\Repository\Transformers\RestaurantTransformer;
use \Illuminate\Http\Response as Res;
use Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Input;

class RestaurantController extends ApiController
{
    public function __construct(RestaurantTransformer $restaurantTransformer)
    {
 
        $this->restaurantTransformer = $restaurantTransformer;
 
    }

    public function index()
    {
        $limit = Input::get('limit') ?: 100;
 
        $restaurants = Restaurant::paginate($limit);
         
        return $this->respondWithPagination($restaurants, [
            'restaurants' => $this->restaurantTransformer->transformCollection($restaurants->all())
        ], 'Records Found!');
    }

    public function byGroup($id)
    {
        $limit = Input::get('limit') ?: 100;
        $restaurants = Restaurant::where('group_menu_id', $id)->orWhere('type_id', $id)->paginate($limit);
        return $this->respondWithPagination($restaurants, [
            'restaurants' => $this->restaurantTransformer->transformCollection($restaurants->all())
        ], 'Records Found!');
    }

    public function show($id){
         
        $restaurant = Restaurant::find($id);
 
        if(!$restaurant){
 
            $restaurant = Restaurant::where('id', $id)->firstOrFail();
        }
 
        if(count($restaurant) == 0){
            return $this->respondWithError("Restaurant Not Found!");
        }
 
        return $this->respond([
            'error' => false,
            'status' => 'success',
            'status_code' => $this->getStatusCode(),
            'message' => 'Record Found',
            'restaurant' => $this->restaurantTransformer->transform($restaurant)
        ]);
         
 
    }
}
