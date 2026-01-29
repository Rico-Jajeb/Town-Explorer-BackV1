<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City_model extends Model
{
    protected $fillable = [
        'city_name', 'description', 'longitude', 'latitude',
    ];

    public function places(){
        return $this->hasMany(Place_model::class);
    }
}
