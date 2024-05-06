<?php

namespace App\Models;

use App\Enum\FileTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'files';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'filename',
        'path',
        'type',
    ];

    /**
     * @return null|string
     */
    public function getFileName():? string
    {
        return substr($this->filename, 0, 11);
    }

    /**
     * @return null|string
     */
    public function getFileAssets():? string
    {
        return tenant_asset($this->getFilePath());
    }

    /**
     * @return null|string
     */
    public function getFilePath():? string
    {
        return $this->path;
    }

    /**
     * @param string $mimetype
     * @return int
     */
    public static function getTypeByMimeType(string $mimetype): int
    {
        return strpos($mimetype, 'image') !== false ? FileTypesEnum::TYPE_IMAGE : FileTypesEnum::TYPE_VIDEO;
    }

    /**
     * @return string
     */
    public function getFileUrl(): string
    {
        return '/public/' . ($this->type == FileTypesEnum::TYPE_IMAGE ? 'images' : 'videos') . '/' . $this->filename;
    }
}
