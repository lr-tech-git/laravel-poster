<?php

namespace App\Repositories;

use App\Models\UserInfo;

class UserInfoRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return UserInfo::class;
    }
}
