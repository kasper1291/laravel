<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function submit(ContactRequest $request){
        //dd($request->input('phone'));

        /*$validation = $request->validate([
            'phone' => 'required|min:5|max:50'
        ]);*/



    }

}
