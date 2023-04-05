<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {

        
        return view('form');
    }


    // public function submitForm(Request $request)
    // {
    //     $formData = new FormData;
    //     $formData->name = $request->input('name');
    //     $formData->email = $request->input('email');
    //     $formData->save();

    //     return view('form_submitted');
    // }


    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required', 
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $registration = new User;
        
        $registration->name = $request[ 'name' ];
        $registration->email = $request[ 'email' ];
        $registration->password = $request[ 'password'];
        $registration->save();
        return redirect()->back();
    }
}
