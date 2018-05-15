<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Redirect;
class Table extends Controller
{
	public value_frm array(
		'id'=>['value'=>0,'err'=>''],
		'name'=>['value'=>'','err'=>''],
		'id_service'=>['value'=>0,'err'=>''],
		'id_usser'=>['value'=>0,'err'=>''],
		'header'=>['value'=>'','err'=>''],
		'footer'=>['value'=>'','err'=>''],
		'name_table'=>['value'=>'','err'=>''],
	);
    public function Create_Table()
    {
    	$data = array();
    	return view('table.table_frm');
    }
}
