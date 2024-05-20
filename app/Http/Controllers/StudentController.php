<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;



class StudentController extends Controller
{

   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students =Student::get();
        return view ('students' , compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->validate([
            'studentName'=>'required|max:100|min:5',
            'age'=>'required|integer|max:2',
             ]);


        //
        // $student= new Student();
        // $student->studentName =$request->input('studentName');
        // $student->age = $request->input('age');
        // $student->save();
        // return 'New student is inserted successfully';
      
        Student::create($data);
        return redirect('students');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('showStudent' , compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('id',$id)->update($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        Student::where('id',$id)->delete();
        return redirect('students');
    }


      /**
     * Remove the specified resource from storage.
     */
    public function forceDelete(Request $request)
    {

        $id=$request->id;
        Student::where('id',$id)->forceDelete();
        return redirect('trashStudent');
    }

    /**
     * VIEW TRASHED
     */
    public function trash()
    {

        $trashed= Student::onlyTrashed()->get();
        return view('trashStudent' , compact('trashed'));
        
    }

      /**
     * Restore 
     */
    public function restore(string $id)
    {
        Student::where('id',$id)->restore();
        return redirect('students'); 
    }



}
