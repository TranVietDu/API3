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
        return Student::create($request->all());
    }
    public function showStudent(Student $student){
        return Student::find($student);
    }
    public function update(Request $request,Student $student){
        $student->update($request->all());
        return $student;
    }
}
