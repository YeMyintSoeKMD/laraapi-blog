<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\{UserResource, CategoryResource};
use App\Models\{User, Category};
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getUsers()
    {
        $users = UserResource::collection(User::all());
        return $this->successResponse($users);
    }
    
    public function getProfile()
    {
        $user =  new UserResource(auth()->user());
        return $this->successResponse($user);
    }

    public function getCategories()
    {
        $categories = CategoryResource::collection(Category::all());
        return $this->successResponse($categories);
    }
}
