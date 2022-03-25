<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CategoryResource
 */
class CategoryResource extends JsonResource
{
    /** @var Category */
    public $resource;

    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'   => $this->resource->id,
            'title' => $this->resource->title            
        ];
    }


}
