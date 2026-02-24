<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//REQUEST
use App\Http\Requests\placeRequest;

//SERVICE
use App\Services\placeService;

//MODELS
use App\Models\Place_model;

class PlaceController extends Controller
{
    protected $placeService;


    public function __construct(placeService $placeService) {
        $this->placeService = $placeService;
    }

    public function addPlace(placeRequest $request){
        $validated = $request->validated();
        $place = $this->placeService->create($validated);
        return response()->json([
            'message' => 'Category added Successfully',
            'data' => $place,
        ], 201);
    }
   
 
}
