<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ComplaintReviews extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'complaints_reviews';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'user_id',
        'complaint_id',
        'rate',
    ];

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * @return HasOne
     */
    public function complaint(): HasOne
    {
        return $this->hasOne(Complaint::class, 'id', 'complaint_id');
    }
}
