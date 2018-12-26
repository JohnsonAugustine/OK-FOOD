<?php
namespace App\Repository\Transformers;
 
class TaxTransformer extends Transformer{
 
    public function transform($tax){
 
        return [
            //'id' => $tax->id,
            'tax' => $tax->tax,
            'delivery_cost' => $tax->delivery_cost,
        ];
 
    }
 
}