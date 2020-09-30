<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
    	return view('main');
    }

    public function mayoristaCliente(){
    	return view ('mayoristaCliente');
    }

    public function mayoristaDistribuidor(){
    	return view ('mayoristaDistribuidor');
    }

    public function ormiga(){
    	return view ('ormiga');
    }
    public function aboutUs(){
    	return view('aboutUs');
    }

    public function testimonials(){
    	return view('testimonials');
    }

    public function contact(){
    	return view ('contact');
    }

    public function ourApps(){
    	return view('ourApps');
    }

    public function myjato(){
        return view ('myjato');
    }

}
