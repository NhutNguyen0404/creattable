<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_User extends Model
{
    protected $table = "user_table";
    protected $primaryKey = "id";
    public $timestamps = true;
}