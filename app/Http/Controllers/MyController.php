<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtuas;
use App\anak;



class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "lindiyani";
    	return "nama saya adalah <b>".$a."</b>";
    }

    public function tampilan()
     {
     	return view('about');
     }

     public function tampilanmodel()
     {
       $ortu =orangtuas::all();
       
       return view('ortu',compact('ortu'));

     }

     public function tampilanmodelanak()
     {
      $anak  =anak::all();
      return view('aboutanak',compact('anak'));

       }
      public function tampilanmodelortu()
      {
          $anak  =anak::all();
      $ortu  =orangtuas::all();
      return view('about',compact('ortu','anak'));
    }
}
