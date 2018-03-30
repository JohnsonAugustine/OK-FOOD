<?php

namespace App\Transformers;

use App\Type;
use League\Fractal\TransformerAbstract;

class TypeTransformer extends TransformerAbstract
{
    public function transform(Type $type)
    {
        return [
          'id'            => $type->id,
          'name'          => $type->name,
          'image'         => $type->image,
          'created_at'    => $type->created_at,
      ];
    }
}
