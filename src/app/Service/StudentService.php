<?php
namespace App\Service;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentService
{
    public function showAll()
    {
       return Student::all();
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'age'=>'required',
        ]);
        $student=new Student;
        $student->name=$request->name;
        $student->age=$request->age;
        $student->save();
    }
    public function showStudent(Student $student){
        return Student::find($student);
    }
    public function update(Request $request,Student $student){
          $request->validate([
            'name'=>'required',
            'age'=>'required',
        ]);
        $student->name=$request->name;
        $student->age=$request->age;
        $student->save();
    }
}
