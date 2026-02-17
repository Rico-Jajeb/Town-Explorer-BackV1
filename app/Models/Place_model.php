<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place_model extends Model
{

    use HasFactory;
    protected $table = 'place_model';

    protected $fillable = [
        'place_name', 'description', 
        
    ];

    public function category()
    {
        return $this->belongsTo(PlaceCategoryModel::class);
    }

    public function city()
    {
        return $this->belongsTo(City_model::class);
    }
}
