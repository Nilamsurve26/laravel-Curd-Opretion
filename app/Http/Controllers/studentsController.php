<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $students=Student::paginate();
         $students=Student::all();
        // dd($students);
        return view('index', ['students'=>$students]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new Student;
            //   $this->validate($request,[
            //         'username'=>'required|unique:students',
            //         'password'=>'required',
            //         'email'=>'required|unique:students',
            //         'description'=>'required',
            //         'gender'=>'required',

            //   ]);
        
                $students->username=$request->input('username');
                $students->password=$request->input('password');
                $students->email=$request->input('email');
                $students->description=$request->input('description');
                $students->date=$request->input('date');
                $students->age=$request->input('age');
                $students->phone=$request->input('phone');
                $students->gender=$request->input('gender');
                $students->Active=$request->input('Active');
                $students->color=json_encode($request->input('color'));
                $students->notification=$request->input('notification');
                $students->Ba_status=$request->input('Ba_status');
               // dd($students);
               $students->save();
                //  echo"<pre>";
                //dd($students);
                //   echo "<pre>";
          return redirect('students')->with('success','Information added Sucessfully');
        //  return redirect('students');
        // return redirect()->route('students.index')->with('success','Successfully registered a new student!');

    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
           $students=Student::find($id);
        //    echo $students;        
        return view('update',['students'=>$students]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $students = Student::find($id);
        // echo"<pre>";
        // print_r($students);
        // echo "<pre>";

        // $data=$request->all();
        $students->username=$request->input('username');
        $students->password=$request->input('password');
        $students->email=$request->input('email');
        $students->description=$request->input('description');
        $students->date=$request->input('date');
        $students->age=$request->input('age');
        $students->phone=$request->input('phone');
        $students->gender=$request->input('gender');
        $students->Active=$request->input('Active');
        $students->color=json_encode($request->input('color'));

        $students->update();
        // print_r($articles);
        // '</pre>';
        // return redirect('students');
        return redirect('students')->with('success','Information update Sucessfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students= Student::find($id);
        $students->delete();
        // return redirect('students');
        return redirect('students')->with('success','Information delete Sucessfully');


    }
}
