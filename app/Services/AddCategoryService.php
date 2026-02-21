<?php

namespace App\Services;

use App\Models\PlaceCategoryModel;

class AddCategoryService
{

    public function create(array $data)
    {
        return PlaceCategoryModel::create([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
    }

}
