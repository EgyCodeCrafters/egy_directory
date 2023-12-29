<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryDirectory extends Model
{
    protected $table = 'category_directory';

    protected $fillable = [
        'category_id',
        'directory_id',
    ];

    // Add any additional methods or relationships here
}
