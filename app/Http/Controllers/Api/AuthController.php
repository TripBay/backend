<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiUserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    public function register(ApiUserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
         ]);

        $token = $this->guard()->login($user);
        // $response = [
        //     'token' => $this->respondWithToken($token),
        //     'success' => response()->json(['success' => 'Account successfully registered!'])
        // ];

        $response = response()->json(['success' => 'Account successfully registered!']);
        
        return $response;
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
            if (!$token = $this->guard()->attempt($credentials)) {
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
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'role_id' => $this->guard()->user()->role->id ?? 2, //After registration gets role id, if none, default to 2 => 'USERS'
            'token_type'   => 'bearer',
            'expires_in'   => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard('api');
    }
}
