<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

/**
 * Interface ProductServiceInterface
 */

interface ProductServiceInterface
{

    /**
     * @return Collection|null 
     */

    public function list(): ?Collection;
}