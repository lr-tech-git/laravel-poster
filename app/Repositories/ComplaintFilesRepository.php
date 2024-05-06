<?php

namespace App\Repositories;

use App\Models\ComplaintFiles;

class ComplaintFilesRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ComplaintFiles::class;
    }
}
