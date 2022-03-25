<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;

/**
 * Interface CategoryServiceInterface
 */

interface CategoryServiceInterface
{

    /**
     * @return Collection|null
     */

    public function list(): ?Collection;

    /**
     * @return Category
     */

    public function store($data): Category;

    /**
     * @return Category
     */

    public function show($id): Category;

    /**
     * @return Category
     */

    public function update($data, $id): Category;

    /**
     * @return Bool
     */
    public function destroy($id);
}
