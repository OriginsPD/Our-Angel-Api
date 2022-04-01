<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Requests\AuthUser;
use App\Http\Requests\CreateUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    protected $tokenName;

    protected function setTokenName()
    {
        return $this->tokenName = config('app.name') . '-Auth';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Login(AuthUser $request)
    {
        $this->setTokenName();

        $credentials = $request->validated();

        (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]))
            ? $token = auth()->user()->createToken($this->tokenName)->plainTextToken
            : $errors = trans('auth.failed');

        $responseBody = [
            'user' => auth()->user(),
            'token' => ($token) ?? 'No Token Created'
        ];

        return response()->json([
            'status' => 200,
            'message' => ($errors) ?? 'User Login Successfully',
            'body' => $responseBody
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function Register(CreateUser $request)
    {
        $this->setTokenName();

        $credentials = $request->validated();

        $user = User::create([
            'username' => $credentials['username'],
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'userType' => 1,
        ]);

        Guardian::create([
            'user_id' => $user->id,
            'trn' => 47856932
        ]);

        $token = $user->createToken($this->tokenName)->plainTextToken;


        $responseBody = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json([
            'status' => 201,
            'message' => 'User Created Successful',
            'body' => $responseBody
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        // Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return response()->json([
            'message' => 'Logged Out'
        ]);
    }
}
