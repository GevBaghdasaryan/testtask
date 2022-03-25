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

    /**
     * @return Category
     */
    public function store($data): Category
    {
        return Category::firstOrCreate($data);
    }

    /**
     * @return Category
     */
    public function show($id): Category
    {
        return Category::findOrFail($id);
    }

    /**
     * @return Category
     */
    public function update($data, $id): Category
    {
        $category = Category::findOrFail($id);
        return $category->fill($data)->save();
    }

    /**
     * @return Bool
     */
    public function destroy($id) : bool
    {
        $category = Category::findOrFail($id);
        if(count($category->products) > 0){
            return false;
        }
        return $category->delete();
    }
}
