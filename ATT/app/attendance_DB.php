<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance_DB extends Model
{
    protected $fillable=['staff_id','first_name','last_name','gender','address','phone_number','nic'];
}
