<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'image', 'origin', 'year', 'type'
    ];

    public function wineType()
    {
        return $this->hasOne(WineType::class, 'id', 'type');
    }

    public function reviews()
    {
        return $this->hasMany(WineReview::class, 'wine_id', 'id');
    }
}
