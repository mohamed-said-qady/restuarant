<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\registerRequest;
class registerController extends Controller
{
    public function register(registerRequest $request){

        $newUser=$request->validated();
        $newUser['password'] = Hash::make($newUser['password']);
        $newUser['role']    ="user";
        $newUser['status']  ="active";

        $user=User::create($newUser);

        $success['token']=$user->createToken('user')->plainTextToken;
        $success['name']=$user->name;
        $success['success']=true ;

        return response()->json($success,201);

    }
}
