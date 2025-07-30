<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kyslik\ColumnSortable\Sortable;
use LaravelApiBase\Models\ApiModel;

class Directory extends ApiModel
{
    use CrudTrait;
    use HasFactory;
    use Sortable;

    // Define the sortable columns
    public $sortable = ['name', 'category_id', 'description'];

    protected $fillable = [
        'name',
        'category_id',
        'country_id',
        'city_id',
        'description',
        'phone',
        'whatsapp',
        'address',
        'google_map',
        'notes',
        'facebook',
        'email',
        'twitter',
        'instagram',
        'website',
        'youtube',
        'linkedin',
        'telegram',
        'cv_link',
        'is_approved',

    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function subCategories()
{
    return $this->belongsToMany(SubCategory::class);
}

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
