<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Place_model extends Model
{
    protected $fillable = [
        'city_id', 'place_name', 'description', 'latitude', 'longitude',
        'price_level', 'avg_cost_estimate', 'open_time', 'close_time', 'category',
        'rating', 'visit_duration', 'facebook', 'email', 'number',
        'other_contact', 'extra1', 'extra2', 'extra3', 
    ];

    public function category()
    {
        return $this->belongsTo(Category_model::class);
    }

    public function city()
    {
        return $this->belongsTo(City_model::class);
    }
}
