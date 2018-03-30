<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="ok-food.swagger.io",
 *     basePath="/v2",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="OK-FOOD REST API DOCUMENTATION",
 *         description="Multi vendor restaurant ordering system ",
 *         termsOfService="http://swagger.io/terms/",
 *         @SWG\Contact(
 *             email="ceo@next-innovation.co.id"
 *         ),

 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about OK-FOOD",
 *         url="http://swagger.io"
 *     )
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
