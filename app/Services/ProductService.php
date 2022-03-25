<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Interfaces\ProductServiceInterface;
use App\Models\Product;

class ProductService implements ProductServiceInterface
{

    /**
     * @return Collection|null
     */
    public function list(): ?Collection
    {
        return Product::all();
    }
}
