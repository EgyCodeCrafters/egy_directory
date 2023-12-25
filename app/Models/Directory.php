<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Directory extends Model
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
