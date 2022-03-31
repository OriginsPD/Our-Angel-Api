<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUser;

class AuthController extends Controller
{
    protected $tokenName;

    protected function setTokenName()
    {
        return $this->tokenName = config('app.name') . '-Auth';
    }

    public function register(CreateUser $request)
    {
        $credentials = $request->validated();

        $user = User::create([
            'username' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'userType' => 2,
        ]);

        $token = $user->createToken($this->setTokenName())->plainTextToken;


        $responseBody = [
            'token' => $token,
            'userInfo' => $user
        ];

        return response()->json([
            'status' => 201,
            'message' => 'User Created Successful',
            'body' => $responseBody
        ]);
    }
}
