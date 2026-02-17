<?php

namespace App\Http\Controllers\API\Admin\Place;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;

//RESOURCE
use App\Http\Resources\CategoryPlaceResources;

//MODEL
use App\Models\PlaceCategoryModel;


class PlaceCategoryController extends Controller
{
    protected $CategoryService;

    public function __construct(CategoryService $CategoryService)
    {
        $this->CategoryService = $CategoryService;
    }


    public function index()
    {
        $setting = PlaceCategoryModel::findOrFail(1);
        return response()->json(new CategoryPlaceResources($setting));
    }

    // public function index()
    // {
    //     $category = $this->CategoryService->getAllCategory();
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $category
    //     ]);
    // }
}
