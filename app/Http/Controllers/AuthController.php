<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth as FirebaseAuth;

class AuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $this->auth = $factory->createAuth();
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($request->email, $request->password);
            $idToken = $signInResult->idToken();
            return response()->json(['token' => $idToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $userProperties = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            $createdUser = $this->auth->createUser($userProperties);
            return response()->json(['user' => $createdUser]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'User registration failed'], 500);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
