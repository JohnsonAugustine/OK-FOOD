<?php

namespace App\Http\Controllers\Api;

use App\Customer;
use Illuminate\Http\Request;
use App\Menu;
use App\Transformers\MenuTransformer;

class MenuController extends Controller
{
    public function getAllMenu(Menu $menu)
    {
        $menu = Menu::all();
        $response = fractal($menu)
                    ->transformWith(new MenuTransformer)
                    ->toArray();
        return response()->json($response, 200);
    }

    public function getMenuByCategory($id)
    {
        $menu = Menu::all()->where('category_id', $id);
        $response = fractal()->collection($menu)
                    ->transformWith(new MenuTransformer)
                    ->toArray();

        return response()->json($response, 200);
    }
}
