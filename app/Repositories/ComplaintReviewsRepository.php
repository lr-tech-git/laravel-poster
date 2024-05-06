<?php

namespace App\Repositories;

use App\Models\ComplaintReviews;

class ComplaintReviewsRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return ComplaintReviews::class;
    }
}
