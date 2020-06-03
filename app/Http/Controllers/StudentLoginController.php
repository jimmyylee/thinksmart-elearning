<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use Validator;
use Auth;
use App\Http\Resources\Student as StudentResource;

class StudentLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Students

        $students = Student::paginate(10); 
        return StudentResource::collection($students);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $student = new Student;
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->username = $request->input('username');
        $student->card_id = $request->input('card_id');
        $student->email = $request->input('email');
      //  $student->password = bcrypt($request->input('password'));  hana ana 3amlt da3del we khallato hash
        $student->password = Hash::make($request->input('password'));
        $student->year_id = $request->input('year_id');
        $student->course_id = $request->input('course_id');

        $student->save();







    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return new StudentResource($student);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if($student->delete()){
        return new StudentResource($student);
    }
}

// Student Login

function loginstudent()
        {
             return view('login');
        }


        // Da kan Validation lel login bas kan feh Error 3ashan mosh beshof aw ya3ml check lel password 3ala anno hash


// function checkloginstudent(Request $request)
//         {

//         $this->validate($request , [
//             'email' => 'required|email',
//             'password' => 'required|alphaNum|min:3'

//         ]);

//         $user_data = array(
//             'email'  => $request->get('email'),
//             'password' => $request->get('password')
//            );

//         if(Auth::attempt($user_data))
//             {
//                // return $info;
//                 // print_r($info);
//             return'Successlogin Student';

//         }
//         else
//         return 'Error Not Working';

        

//     }


    function checkloginstudent(Request $request)
{
    $email = $request->email;
    $password = $request->password;
    $student = Student::where('email', $email)->firstOrFail();
    if(Hash::check($password, $student->password))
    {
    return response()->json([$student]);
    }
    else
    return 'Error Not Working';
}



// function successlogin()
//     {
       
//         return redirect()->away('https://www.google.com');

//     }

 function logout()
     {
      Auth::logout();
     return;
     }

}


