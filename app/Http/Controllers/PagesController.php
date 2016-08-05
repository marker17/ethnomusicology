<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex(){

    	return view('pages.welcome');
    }

    public function getJosemaceda(){

    	return view('pages.josemaceda');
    }

    public function getPolicies(){

    	return view('pages.policies');
    }

    public function getContact(){

    	return view('pages.contact');
    }


    
}
