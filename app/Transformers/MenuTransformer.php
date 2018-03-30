<?php
namespace App\Transformers;

use App\Menu;
use League\Fractal\TransformerAbstract;

class MenuTransformer extends TransformerAbstract
{
    public function transform(Menu $menu)
    {
        return [
          'id'          => $menu->id,
          'name'        => $menu->name,
          'category_id' => $menu->category_id,
          'description' => $menu->description,
          'price'       => $menu->price,
          'image'       => $menu->image,
          'availability'=> $menu->availability,
          'rating'      => $menu->rating,
          'created_at'  => $menu->created_at,
      ];
    }
}
