<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Interfaces\CategoryServiceInterface;
use App\Models\Category;

class CategoryService implements CategoryServiceInterface
{

    /**
     * @return Collection|null
     */
    public function list(): ?Collection
    {
        return Category::all();
    }
}
