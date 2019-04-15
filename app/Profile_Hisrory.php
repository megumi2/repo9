<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile.Hisrory extends Model
{
  protected $guardrd = array('id');
  public static $rules = array(
    'profile_id' => 'required',
    'edited_at' => 'required',
  );

    //
}
