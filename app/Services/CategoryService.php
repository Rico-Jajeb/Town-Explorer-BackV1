<?php


namespace App\Services;

use App\Models\PlaceCategoryModel;

class CategoryService
{
    public function getAllCategory()
    {
        return PlaceCategoryModel::all(); // Or any complex query
    }
}
