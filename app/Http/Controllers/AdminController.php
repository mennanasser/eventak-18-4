<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function display(){
    	return view('admin.dash');
	}



   public function edit(){
   		return view('admin.editadminprofile');
	}

}
