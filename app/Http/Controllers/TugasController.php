<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class TugasController extends Controller
{
    public function linktree(){
 
    	return view('linktree');

    }

    public function week5(){
 
    	return view('week5');

    }
 
}