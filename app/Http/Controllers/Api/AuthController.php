<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20'
        ]);
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $token = $user->createToken('blog token')->accessToken;
        return $this->sendResponse($token);
    }
}
