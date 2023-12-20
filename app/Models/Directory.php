<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name', 'country_id', 'city_id', 'phone', 'whatsapp', 'address', 'google_map',
        'category_id', 'notes', 'facebook', 'twitter', 'instagram', 'website',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
