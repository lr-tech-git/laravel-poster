<?php

namespace App\Repositories;

use App\Models\ComplaintCategories;

class ComplaintCategoriesRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ComplaintCategories::class;
    }
}
