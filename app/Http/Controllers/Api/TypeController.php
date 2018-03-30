<?php
namespace App\Http\Controllers\Api;

use App\Type;
use Illuminate\Http\Request;
use App\Transformers\TypeTransformer;

class TypeController extends Controller
{
    public function getAllType()
    {
        $type = Type::all();
        $response = fractal()->collection($type)
                    ->transformWith(new TypeTransformer)
                    ->toArray();
        return response()->json($response, 200);
    }
}
