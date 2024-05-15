<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resume;
use App\Rules\UppareCase;
use App\Http\Requests\ValidationRequest;

class UserController extends Controller
{
    // contact route ________
    public function contactShow ()
    {
        return view ('contact');
    }

    // about route ___________
    public function serviceShow ()
    {
        return view ('services');
    }

    // skill route _______
    public function skillShow ()
    {
        return view ('Skill');
    }


    public function store_data (ValidationRequest $request)
    {
        $validation = $request->validated();
        $insertData = new resume();
        $insertData->name = $request->name;
        $insertData->email = $request->email;
        $insertData->phone = $request->phone;
        $insertData->message = $request->message;

        $insertData->save();
        return redirect()->back()->with('message', 'Your data inserted successfully');
    }
}
