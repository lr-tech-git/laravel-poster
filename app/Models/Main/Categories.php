<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'about',
        'status'
    ];

    public function __construct(array $attributes = [])
    {
        $this->setConnection('central');

        parent::__construct($attributes);
    }
}
