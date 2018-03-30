<?php
namespace App\Transformers;

use App\Restaurant;
use League\Fractal\TransformerAbstract;

class RestaurantTransformer extends TransformerAbstract
{
    public function transform(Restaurant $restaurant)
    {
        return [
          'id'          => $restaurant->id,
          'name'        => $restaurant->name,
          'type_id'     => $restaurant->type_id,
          'merchant_id' => $restaurant->merchant_id,
          'description' => $restaurant->description,
          'city'        => $restaurant->city,
          'district'    => $restaurant->district,
          'street'      => $restaurant->street,
          'contact'     => $restaurant->contact,
          'image'       => $restaurant->image,
          'latitude'    => $restaurant->latitude,
          'longitude'   => $restaurant->longitude,
          'rating'      => $restaurant->rating,
          'is_active'   => $restaurant->is_active,
          'priority'    => $restaurant->priority,
          'open'        => $restaurant->open,
          'close'       => $restaurant->close,
      ];
    }
}
