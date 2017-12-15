<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function allteacher()
    {
        return '所有老師'.'</br><a href='.route("teachers.create").'>建立老師資料的表單</a>
                           </br><a href='.route("teachers.show",65).'>顯示特定老師編號</a>';
    }

     public function create()
    {
        return view('teachers.create');
    }

    public function show($id)
    {
        return view('teachers.show')->with(['id'=>$id]);
    }

    public function store(Request $request)
    {
        return '老師編號:'.$request->id.'</br>'.'老師名稱:'.$request->name;
    }
}
