<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ComplaintFiles extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'complaints_files';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'complaint_id',
        'file_id',
    ];

    /**
     * @return HasOne
     */
    public function complaint(): HasOne
    {
        return $this->hasOne(Complaint::class, 'id','complaint_id');
    }
}
