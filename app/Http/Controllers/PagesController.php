<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $names = [

            ['firstName'=>'Saleh' ,'lastName'=>'Moeinadini'],

            ['firstName'=>'Milad' , 'lastName'=>'Moeinadini']
        ];


    return view('welcome', compact('names'));
    }




    public function aboutUs(){


        return view('aboutUs');
        
    }
}
