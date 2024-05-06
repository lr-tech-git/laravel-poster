<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'email',
        'password',
        'tenant_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the full name this user.
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->userInfo->getFullName();
    }

    /**
     * Get user phone number.
     *
     * @return string
     */
    public function getPhoneNumber():? string
    {
        return $this->userInfo->phone_number;
    }

    /**
     * Get user address.
     *
     * @return string
     */
    public function getAddress():? string
    {
        return $this->userInfo->address;
    }

    /**
     * Get user avatar.
     *
     * @return string
     */
    public function getImgSrc(): string
    {
        return $this->userInfo->getAvatar();
    }

    /**
     * Get user banner image.
     *
     * @return string
     */
    public function getBannerSrc(): string
    {
        return '/img/profile-banner.png';
    }

    /**
     * Get user signup date.
     *
     * @return string
     */
    public function getJoinedDate():? string
    {
        return $this->created_at ? $this->created_at->format('M Y') : null;
    }

    /**
     * @return HasOne
     */
    public function tenant()
    {
        return $this->hasOne(Tenant::class, 'id','tenant_id');
    }

    /**
     * @return HasOne
     */
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'user_id','id');
    }

    /**
     * @return HasMany
     */
    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'user_id');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getCustomStatusAttribute(): \Illuminate\Support\Collection
    {
        $status = collect();

        switch ($this->status) {
            case 'active':
                $status->name = 'Active';
                $status->class = 'bg-label-success';
                break;
            case 'inactive':
                $status->name = 'Inactive';
                $status->class = 'bg-label-secondary';
                break;
            case 'pending':
                $status->name = 'Pending';
                $status->class = 'bg-label-warning';
                break;
        }

        return $status;
    }
}
