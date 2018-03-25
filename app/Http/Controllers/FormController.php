<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        if(!isset($_POST["name1"])){
            $var1="";
        }else{
            $var1=$_POST["name1"];
        }
        if(!isset($_POST["char"])){
            $bau=$var1;
        }elseif($_POST["char"]=="Lower"){
            $bau=strtolower($_POST["name1"]);
        }elseif ($_POST["char"]=="Upper"){
            $bau=strtoupper($_POST["name1"]);
        }
        return view('form')->with('bau',$bau);
    }

}
