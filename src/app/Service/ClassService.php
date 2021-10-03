<?php

namespace App\Service;

use Illuminate\Http\Request;
use App\Models\Classs;

class ClassService
{
    public function allClass()
    {
        return Classs::all();
    }
    public function store(Request $request)
    {
        $request->validate([
            'nameclass'=>'required',
        ]);
        $class=new Classs();
        $class->nameclass=$request->nameclass;
        $class->save();
    }
    public function show(Classs $classs)
    {
        return Classs::find($classs);
    }
    public function update(Request $request,Classs $classs)
    {
         $request->validate([
            'nameclass'=>'required',
        ]);
        $classs->nameclass=$request->nameclass;
        $classs->save();
    }
    public function countNumberInClass(Classs $classs)
    {
        return $classs->student->count();
    }
    public function allStudentAllClass(Classs $classs){
        $result=$classs->all();
        foreach($result as $rs){
            $hi[]=$rs->nameclass;
            $hi[]=$rs->student;
        }
        return $hi;
    }
    public function studentInClass(Classs $classs)
    {
        return $classs->student;
    }

}
