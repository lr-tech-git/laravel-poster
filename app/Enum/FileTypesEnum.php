<?php

namespace App\Enum;

class FileTypesEnum extends BaseEnum
{
    const TYPE_IMAGE = 0;
    const TYPE_VIDEO = 1;

    public static function getAll(): array
    {
        return [
            self::TYPE_IMAGE => __('main.file-types.image'),
            self::TYPE_VIDEO => __('main.file-types.video'),
        ];
    }
}
