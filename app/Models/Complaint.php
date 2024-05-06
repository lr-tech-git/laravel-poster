<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Complaint extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'complaints';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'title',
        'slug',
        'address',
        'location',
        'user_id',
        'about',
        'status'
    ];

    /**
     * @return null|string
     */
    public function getCategoryName():? string
    {
        $category = $this->category()->first();
        return $category ? $category->name : null;
    }

    /**
     * @return null|string
     */
    public function getAbout():? string
    {
        return $this->about;
    }

    /**
     * @return null|string
     */
    public function getTitle():? string
    {
        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getRemainedReviewCount():? string
    {
        //TODO: need calculate remain count.
        $remainCount = 20;
        return __('complaints.remain_remained', [$remainCount]);
    }

    /**
     * @return int
     */
    public function getPercentReview(): int
    {
        //TODO: need calculate remain count.
        return 50;
    }

    /**
     * Check if the user can edit the post.
     * @param int $userId
     * @return bool
     */
    public function canEdit(int $userId): bool
    {
        //TODO: need use permissions.
        return $this->user_id == $userId;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at->format('d.m.Y H:i');
    }

    /**
     * Get complaint main image.
     *
     * @return string
     */
    public function getMainSrc(): string
    {
        $file = $this->files()->where('type', 0)->first();
        return $file ? $file->getFileAssets() : '/img/default-image.png';
    }

    /**
     * Get complaint to publication.
     *
     * @return string
     */
    public function getUrl()
    {
        return route('complaints.show', ['id' => $this->id]);
    }

    /**
     * @return null|string
     */
    public function getShortDescription():? string
    {
        $about = $this->getAbout();
        return substr(strip_tags($about), 0, 100) . (strlen($about) >= 100 ? '...' : '');
    }

    /**
     * Get complaint review by user ID.
     * @param int $userId
     * @return null|ComplaintReviews
     */
    public function myReview(int $userId):? ComplaintReviews
    {
        return $this->reviews()->where('user_id', $userId)->first();
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(ComplaintReviews::class, 'complaint_id');
    }

    /**
     * @return HasMany
     */
    public function tags()
    {
        return $this->hasMany(ComplaintTags::class, 'complaint_id');
    }

    /**
     * @return BelongsToMany
     */
    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'complaints_categories', 'complaint_id', 'category_id');
    }

    /**
     * @return HasOne
     */
    public function author(): HasOne
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    /**
     * @return BelongsToMany
     */
    public function files(): BelongsToMany
    {
        return $this->belongsToMany(FileUpload::class, 'complaints_files', 'complaint_id', 'file_id');
    }
}
