<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller

{
 public function create()
 {
   $shoes=[['heels','five','new'],['jordans','eight','stunning'],['flats','ten','modern'],['airforce','six','average'],['boots','seven','new']]; 
   return view ('array')->with('s',$shoes);
 }
}
