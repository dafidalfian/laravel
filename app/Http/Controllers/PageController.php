<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
    	return view('index');
    }

    public function about()
    {
    	$nama = 'Dafid';
    	return view('about',['nama' => 'Dafid Alfian']);
    }
}
