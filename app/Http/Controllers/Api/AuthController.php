<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiUserRequest;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{

    public function register(ApiUserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
         ]);

        $token = auth()->login($user);

        return $this->respondWithToken($token);
    }

    public function checkIfEmailExistsFromUsers($email)
    {
        return User::whereEmail($email)->exists();
    }

    public function login()
    {
        $email = request()->email;
        $credentials = request(['email', 'password']);
        
        try {
            if (! $token = auth()->attempt($credentials)) {
                if($this->checkIfEmailExistsFromUsers($email))
                {
                    return response()->json(['error' => 'The Password you\'ve entered is incorrect! '], 400);
                }
                return response()->json(['error' => 'Email doesn\'t match any account!'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }
}
