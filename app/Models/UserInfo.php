<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserInfo extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'users_info';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'avatar_id',
        'background_id',
        'phone_number',
        'address'
    ];

    /**
     * Get user avatar.
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    /**
     * Get user avatar.
     *
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar ? $this->avatar->getFileAssets() : '/img/avatars/dafault-avatar.png';
    }

    /**
     * @return null|HasOne
     */
    public function user():? HasOne
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    /**
     * @return null|HasOne
     */
    public function avatar():? HasOne
    {
        return $this->hasOne(FileUpload::class, 'id','avatar_id');
    }
}
