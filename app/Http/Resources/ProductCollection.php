<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{

    public $collects = ProductResource::class;

    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request) : array
    {
        return [
            'data' => $this->collection,
        ];
    }

}
