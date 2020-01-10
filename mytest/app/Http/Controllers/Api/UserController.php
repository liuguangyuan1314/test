<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
use App\User;
class UserController extends BaseController
{
    //
    public function userList(){
        dd("哈哈哈哈");
    }

    public function index(){
        dd(1111);
    }

    public function create(){
//        $credentials = request(['name', 'password']);
////        $credentials['password'] = md5($credentials['password']);
//        if (! $token = auth('api')->attempt($credentials)) {
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }
//        dd($token);
//        return $this->respondWithToken($token);
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        dd($token);
    }
}
