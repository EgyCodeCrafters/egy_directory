<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectorySubCategory extends Model
{
    protected $table = 'directory_sub_category';

    protected $fillable = [
        'sub_category_id',
        'directory_id',
    ];

    // Add any additional methods or relationships here
}
