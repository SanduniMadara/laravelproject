<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\stu_details;

class student extends Controller
{
    function returnStudentView(){
        return view('student');
    }

    function returnAddUserView(){
        return view('addUser');
    }

    function AddUsers(Request $request){

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|digits:10',
            'NIC' => 'required|numeric|digits_between:10,12',
        ]);

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt("password");
        $data->save();

        $student = new stu_details;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->NIC= $request->NIC;
        $student->save();
        return redirect()->back()->with('Success','Data successfully added.');

    }
    function viewUsers(){
        return view('viewUsers');

    }
}


