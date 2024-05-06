<?php

namespace App\Helpers;

use App\Models\Categories;
use App\Models\Complaint;

class ComplaintHelper
{
    // TODO:temporary - data must be taken from DB (settings table).
    const NEED_REVIEW_COUNT = 50;

    /**
     * Get calculated review stats from complain.
     *
     * @param Complaint $complaint
     *
     * @return array
     */
    public static function getReviewStats(Complaint $complaint): array
    {
        $reviews = $complaint->reviews();
        $rCount = $reviews->count();
        $rateSum = $reviews->sum('rate');
        $remainCount = $rCount >= self::NEED_REVIEW_COUNT ? 0 : self::NEED_REVIEW_COUNT - (int)$rCount;

        return [
            'review_count' => $rCount,
            'review_start' => $rCount && $rateSum ? $rateSum / $rCount : 0,
            'remain_count' => $remainCount,
            'remain_count_text' => $remainCount == 0 ? __('complaints.remain_complete') : __('complaints.remain_remained', [$remainCount]),
            'percent_review' => $remainCount == 0 ? 100 : (($rCount / self::NEED_REVIEW_COUNT) * 100),
        ];
    }
    /**
     * Get complaint categories array.
     *
     * @return array
     */
    public static function getCategoriesArray(): array
    {
        return Categories::get()->pluck('name', 'id')->toArray();
    }
}
