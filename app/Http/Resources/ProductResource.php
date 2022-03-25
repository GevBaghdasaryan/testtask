<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ProductResource
 */
class ProductResource extends JsonResource
{
    /** @var Product */
    public $resource;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'   => $this->resource->id,
            'title' => $this->resource->title,
            'text' => $this->resource->text,
            'price' => $this->resource->price,
        ];
    }


}
