<?php

namespace App\Services;

use App\Models\PlaceCategoryModel; //tapos adi an moddel

class AddCategoryService
{

    public function create(array $data)
    {
        
        //amo ini an code para pag insert han data tikang ha form tikadto database table
        return PlaceCategoryModel::create([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
    

    }

}
