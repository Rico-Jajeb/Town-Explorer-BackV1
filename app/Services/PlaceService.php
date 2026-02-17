<?php

namespace App\Services;

use App\Models\Place_model; //tapos adi an moddel

class placeService
{

    public function create(array $data)
    {
        
        //amo ini an code para pag insert han data tikang ha form tikadto database table
        return Place_model::create([
            'place_name' => $data['place_name'],
            'description' => $data['description'],
        ]);
    

    }

}
