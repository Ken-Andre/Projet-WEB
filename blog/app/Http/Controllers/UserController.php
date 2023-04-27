<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$',
        ]);


        // verifiez si la validationa echoue
        if($validator->fails()){

            $errors = $validator->errors()->toJson();
            return response()->json(['errors' => $errors], 422);
        }

    }


    public function admin()
    {

        return view('users.admin');

    }

    public function login()
    {

        return view('users.login');

    }

    public function signin()
    {

        return view('users.signin');

    }


}
