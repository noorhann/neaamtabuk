<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) 
        {
            return response()->json($validator->errors(), 422);
        }
        if (! $token = auth()->attempt($validator->validated()))
        {
            return response()->json(['error' => trans('app.log_in_error')], 401);
        }
        return $this->createNewToken($token);
    }

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'address' => 'required',
            'mobile' =>'required|unique:users',
            'region'=>'required|string',
            'gender'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
        return response()->json([
            'message' => trans('app.sign_up_success'),
            'user' => $user
        ], 201);
    }

    public function logout() 
    {
        auth()->logout();
        return response()->json(['message' => trans('app.logout_success')]);
    }

    public function refresh() 
    {
        return $this->createNewToken(auth()->refresh());
    }

    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

}
