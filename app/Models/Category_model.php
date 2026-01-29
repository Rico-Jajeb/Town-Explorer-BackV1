<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_model extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function places(){
        return $this->hasMany(Place_model::class);
    }
}
