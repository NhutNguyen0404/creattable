<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Redirect;
use Providers\Add_User;

class Install extends Controller
{
   
    public $data_frm  = array(
        'username' =>'', 
        'password' =>'',
        'password_re' =>'',
        'email' =>'' 
    );
    public $erros_data = array(
        'username' =>'', 
        'password' =>'',
        'password_re' =>'',
        'email' =>''
    );
    public $data_df = array(
        'username'=>'',
        'password'=>'123456',
        'email'=>'kythuat@ngoisaovietmedia.com',
        'name'=>'Ngôi Sao Việt Media',
        'adress'=>'11 Phú Xuân 3',
        'phone'=>'0914026068',
        'rank'=>0,
    );
    public function Index()
    {
        $data =array();
        $data['title'] = 'Install You Website'; 
        $Arr_template = array('content'=>'frm_creat_user');
        $data['template'] = $Arr_template;
        $data['data_frm'] = $this->data_frm;
        $data['action_frm'] = 'install/add-user';
        $data['erros_data'] = $this->erros_data;
        return view('install.index',$data);
    }
    public function Add_User(Request $request)
    {
        $check_err = true;
        $this->data_frm = $request->all();

        foreach ($this->data_frm as $key => $value) {
           if($value=='')
           {
                 $check_err = false;
                 $this->erros_data[$key] = 'Missing value!';
           }
        }
        if($this->data_frm['password']!=$this->data_frm['password_re'])
        {
            $check_err = false;
            $this->erros_data['password'] = 'Password not match!';
        }
        if($check_err==false)
        {
            Redirect::to('install');
        }
        else
        {
            unset($this->data_frm['_token']);
            unset($this->data_frm['password_re']);
            $data = check_value_null($this->data_frm,$this->data_df);
            schema::create('user_table',function($table){
                $table->Increments('id');
                $table->text('username',255);
                $table->text('password',255);
                $table->text('email',255);
                $table->text('name',255)->nullable();
                $table->text('phone',12)->nullable();
                $table->text('adress',255)->nullable();
                $table->integer('rank');
            });
            Add_User::insert($data);
        }
    }

}
