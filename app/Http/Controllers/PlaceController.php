<?php

namespace App\Http\Controllers;

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
        $this->PlaceService->create($validated);
        return redirect()->route('system.skills')->with('success', "Category Added Successfully!");
    }
}
