<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintCategories extends Model
{
    use HasFactory;

    /**
     * @var string $table
     */
    protected $table = 'complaints_categories';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'complaint_id',
        'category_id',
    ];
}
