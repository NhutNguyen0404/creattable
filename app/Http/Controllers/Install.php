<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Install extends Controller
{
    public function Creat_User()
    {
        $Arr_template =array('content'=>'frm_creat_user');
        $title='install you website';
        $item ="heloo";
        return view('install.index',[
		'template'=> $Arr_template,
        'title' =>$title
		]);
    }
}
