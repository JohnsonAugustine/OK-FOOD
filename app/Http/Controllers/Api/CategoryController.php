<?php
namespace App\Http\Controllers\Api;

use App\Category;
use Illuminate\Http\Request;
use App\Menu;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{

    /**
     * @SWG\Get(
     *     path="/category/byRestaurant",
     *     summary="Finds Pets by tags",
     *     tags={"category"},
     *     description="Muliple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.",
     *     operationId="byRestaurant",
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="restaurant_id",
     *         in="query",
     *         description="restaurant id",
     *         required=true,
     *         type="integer",
     *         @SWG\Items(type="integer"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="successful operation",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/Category")
     *         ),
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Invalid tag value",
     *     ),
     *     security={
     *         {
     *             "petstore_auth": {"write:pets", "read:pets"}
     *         }
     *     },
     *     deprecated=true
     * )
     */
    public function getAllCategoryByRestaurant($id)
    {
        $categories = Category::all()->where('restaurant_id', $id);
        $response = fractal()->collection($categories)
                    ->transformWith(new CategoryTransformer)
                    ->toArray();
        return response()->json($response, 200);
    }
}
