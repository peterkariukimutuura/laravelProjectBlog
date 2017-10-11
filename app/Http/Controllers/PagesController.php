<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
    	$title="welcome to laravel,section ;passing variables";
        // return view('pages.index',compact('title'));
        //another way to pass in variables is

        return view('pages.index')->with('title',$title);
    }

    public function about(){
    	$title="about page,section .,passing variables";
        //return view('pages.about',compact('title'));
        return view('pages.about')->with('title',$title);
    }
    public function services(){
    	$data = array(
    		'title'=>'Services',
    		'services'=>['Web Design','web Programming','Responsive Web Design']

    		);
        return view('pages.services')->with($data);
    }
}
