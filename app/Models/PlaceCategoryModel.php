<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaceCategoryModel extends Model
{

    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'name', 'description'
    ];

}
