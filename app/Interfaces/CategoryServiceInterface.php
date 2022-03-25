<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface CategoryServiceInterface
 */

interface CategoryServiceInterface
{

    /**
     * @return Collection|null 
     */

    public function list(): ?Collection;
}