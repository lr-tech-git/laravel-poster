<?php

namespace App\Repositories;

use App\Models\Categories;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Categories::class;
    }

    /**
     * @return Collection
     */
    public function getAllForSelect(): Collection
    {
        return $this->get();
    }
}
