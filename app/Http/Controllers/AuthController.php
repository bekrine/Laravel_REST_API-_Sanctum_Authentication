<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $feild=$request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
            //check email
        $user=User::where('email',$feild['email'])->first();

        //check password

        if(!$user || !Hash::check($feild['password'],$user->password)){
            return response([
                'message'=>'bad creds'
            ]);
        }

        $token = $user->createToken('myToken')->plainTextToken;

        $responce=[
            'user'=>$user,
            'token'=>$token
        ];

        return response($responce,201);
    }
    public function register(Request $request){
        $feild=$request->validate([
            'name'=>'string|required',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);

        $user=User::create([
            'name'=>$feild['name'],
            'email'=>$feild['email'],
            'password'=>bcrypt($feild['password']),
        ]);

        $token = $user->createToken('myToken')->plainTextToken;

        $responce=[
            'user'=>$user,
            'token'=>$token
        ];

        return response($responce,201);
    }


    public function logout(Request $request){
    /** @var \App\Models\User $user **/
    $user = Auth::user();
    $user->tokens()->delete();
            return [
                'message'=>'logged out'
            ];
    }
}
