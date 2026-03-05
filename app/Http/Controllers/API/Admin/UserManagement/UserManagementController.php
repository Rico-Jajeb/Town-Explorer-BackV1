<?php

namespace App\Http\Controllers\API\Admin\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//SERVICE
use App\Services\DisplayUserService;

//RESOURCE
use App\Http\Resources\UserResources;

class UserManagementController extends Controller
{

    protected $DisplayUserService;

    public function __construct(DisplayUserService $DisplayUserService,)
    {
        $this->DisplayUserService = $DisplayUserService;
    }

    public function getUsers() {

        $user = $this->DisplayUserService->getUserData();
        return  UserResources::collection($user);
    }
}
