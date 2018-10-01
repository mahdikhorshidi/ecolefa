<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class School extends Model
{

    use HasSlug;

    protected $fillable = [
        'name', 'visible', 'detail', 'slug', 'expaire_date', 'user_id', 'domain'
    ];

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeSchool($query)
    {
        return $query->where('domain', 'ghafari.test');
    }

}
