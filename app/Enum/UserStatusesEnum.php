<?php

namespace App\Enum;

enum UserStatusesEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending';
}
