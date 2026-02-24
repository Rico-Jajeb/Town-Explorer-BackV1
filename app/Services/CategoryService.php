<?php


namespace App\Services;

use App\Models\PlaceCategoryModel;
use Illuminate\Support\Facades\Cache;
class CategoryService
{
    public function getPaginatedCategories($perPage = 5)
    {
        return PlaceCategoryModel::paginate($perPage); 
    }

}
