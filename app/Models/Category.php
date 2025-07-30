<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;
use LaravelApiBase\Models\ApiModel;

class Category extends ApiModel
{
    use CrudTrait;
    use HasFactory;
    use Sortable;

    public $sortable = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }


    public function directories()
    {
        return $this->belongsToMany(Directory::class);
    }
}
