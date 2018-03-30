<?php
namespace App\Http\Controllers\Api;

use App\Category;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Transformers\RestaurantTransformer;

class RestaurantController extends Controller
{
    public function getAllRestaurant()
    {
        $restaurants = Restaurant::all();

        $response = fractal()->collection($restaurants)
                    ->transformWith(new RestaurantTransformer)
                    ->toArray();

        return response()->json($response, 200);
    }

    public function getAllRestaurantByType($id)
    {
        $restaurants = Restaurant::all()->where('type_id', $id);

        $response = fractal()->collection($restaurants)
                    ->transformWith(new RestaurantTransformer)
                    ->toArray();

        return response()->json($response, 200);
    }
}
