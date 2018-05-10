<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index_controller extends Controller
{
    public function index()
	{
		$item = 'hello thanh';
		return view('index.index',[
		'item' => $item
		]);
	}
}
