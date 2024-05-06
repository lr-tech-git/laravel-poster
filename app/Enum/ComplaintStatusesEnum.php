<?php

namespace App\Enum;

class ComplaintStatusesEnum extends BaseEnum
{
    const STATUS_SAVE = 0;
    const STATUS_PENDING = 2;
    const STATUS_DENIED = 3;
    const STATUS_PUBLISH = 1;

    public static function getAll(): array
    {
        return [
            self::STATUS_SAVE => __('complaints.statuses.save'),
            self::STATUS_PENDING => __('complaints.statuses.pending'),
            self::STATUS_DENIED => __('complaints.statuses.denied'),
            self::STATUS_PUBLISH => __('complaints.statuses.publish'),
        ];
    }
}
