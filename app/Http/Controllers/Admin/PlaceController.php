<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//REQUEST
use App\Http\Requests\placeRequest;

//SERVICE
use App\Services\PlaceService;

//MODELS
use App\Models\TechSkillModel;

class PlaceController extends Controller
{
    protected $PlaceService;


    public function __construct(PlaceService $PlaceService,) {
        $this->PlaceService = $PlaceService;
    }

    public function addPlace(placeRequest $request){
        $validated = $request->validated();
        $place = $this->PlaceService->create($validated);
        return response()->json([
            'message' => 'Place added Successfully',
            'data' => $place,
        ], 201);
    }
}
