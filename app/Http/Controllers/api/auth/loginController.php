<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use App\Models\User;
use Auth;
//\"App\\Http\\Controllers\\api\\auth\\request\"",
class loginController extends Controller
{ 
    
    public function login(loginRequest $request){
        $credential=[
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if(auth()->attempt($credential)){
            $user=Auth::user();
           // $user->Token()->delete();
            $user->tokens()->delete();
            $success['token']=$user->createToken(request()->userAgent())->plainTextToken;
            $success['name']=$user->name;
            return response()->json($success,200);
        }
        else 
        return response()->json(['error'=>'unautherized',401]);
    }
}
