<?php

namespace App\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [

          'id'            => $category->id,
          'name'          => $category->name,
          'restaurant_id' => $category->restaurant_id,
          'created_at'    => $category->created_at,
      ];
    }
}
