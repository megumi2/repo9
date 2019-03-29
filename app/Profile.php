<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('name');
    //
    public static $rules = array(
      'gender' => 'required',
      'hobby' => 'required',
      'introduction' => 'required',
    )
}
