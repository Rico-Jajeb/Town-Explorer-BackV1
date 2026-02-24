<?php

namespace App\Http\Controllers\API\Admin\Place;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;


//REQUEST
use App\Http\Requests\PlaceCategoryRequest;

//RESOURCE
use App\Http\Resources\CategoryPlaceResources;

//MODEL
use App\Models\PlaceCategoryModel;

//SERVICE
use App\Services\AddCategoryService;

class PlaceCategoryController extends Controller
{
    protected $CategoryService;
    protected $AddCategoryService;

    public function __construct(CategoryService $CategoryService, AddCategoryService $AddCategoryService)
    {
        $this->CategoryService = $CategoryService;
        $this->AddCategoryService = $AddCategoryService;
    }


    public function index()
    {
        $setting = PlaceCategoryModel::findOrFail(1);
        return response()->json(new CategoryPlaceResources($setting));
    }
  

    public function addCategoryPlace(PlaceCategoryRequest $request){
        $validated = $request->validated();
        $place = $this->AddCategoryService->create($validated);
        
        return response()->json([
            'message' => 'Category added Successfully!',
            'data' => $place,
        ], 201);
    }
  
}
