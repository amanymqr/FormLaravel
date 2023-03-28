<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckWordsCout;

class FormController extends Controller
{
//Form1---------------------
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));
        // $name= $request->input('name');
        $name=$request->name;
        $age=$request->age;
        return"welcome $name ,  ur age $age";

    }


//Form2---------------------
    public function form2()
    {
        return view('forms.form2');
    }

public function form2_data(Request $request)
    {
    $name  =  $request->name;
    $email =  $request->email;
    $age   =  $request->name;
    return view('forms.form2_data' , compact('name', 'email', 'age'));
    }



//Form3---------------------
public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request){
        // dd($request->all());
        $request->validate([
            'name'     => ['required' , 'min:3' , 'max:20'],
            'email'    =>'required',
            'password' => ['required', 'min:8' , 'confirmed'],
            'password_confirmation'=>'required',
            'bio'  => ['required' , new CheckWordsCout(5)],
        ]);
        // dd($request->all());

    }


//Form4---------------------
    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request){

        $request->validate([
            'name'     => ['required' , 'min:3' , 'max:50'],
            'cv'    =>'required|file|mimes:pdf',
        ]);

        // $file_name= $request->file('cv')->getClientOriginalName() ;

        $file_name=rand().time().$request->file('cv')->getClientOriginalName();
        //اسم جديد عشان لما ارفع الملف كمان مرة م يحذف القديم

        $request->file('cv')->move(public_path('uploads'), $file_name);



        dd($request->all());
    }



}

