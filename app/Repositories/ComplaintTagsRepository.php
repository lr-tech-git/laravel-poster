<?php

namespace App\Repositories;

use App\Models\ComplaintTags;

class ComplaintTagsRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ComplaintTags::class;
    }
}
