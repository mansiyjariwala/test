<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('student.createStudent');
    }

    public function save(Request $request)
    {
        // $student=new student;
        // $student->studentname=$request->studentname;
        // $student->gender=$request->gender;
        // $student->dob=$request->dob;
        // $student->save();
        // dd($student);
        $request->validate([
            'studentname'=>'required',
            'gender'=>'required',
        ]);
       $res=student::create($request->all());

    }
    public function show()
    {
        $student=student::all();
        return view('student.showStudent',['student'=>$student]);
    }
    public function destroy($id)
    {
        student::where('id',$id)->delete();
        return redirect('showStudent');
    }
    public function edit(Request $req,$id)
    {
        $student=student::select('studentname','dob','id','gender')->where('id',$id)->first();
        return view('student.editStudent',['student'=>$student]);
    }
    public function update($id,Request $req)
    {
        $student=student::find($id);
        $student->studentname=$req->input('studentname');
        $student->dob=$req->input('dob');
        $student->gender=$req->input('gender');
        $student->update();
        return redirect('showStudent');
    }
}
