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
        return Classs::create($request->all());
    }
    public function show(Classs $classs)
    {
        return Classs::find($classs);
    }
    public function update(Request $request,Classs $classs)
    {
        $classs->update($request->all());
        return $classs;
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
