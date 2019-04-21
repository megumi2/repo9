<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('name');
    protected $fillable = [
      'name', 'gender', 'hobby','introduction'
    ];
    //
    public static $rules = array(
      'gender' => 'required',
      'hobby' => 'required',
      'introduction' => 'required',
    );
    public function profile_histories()
    {
      return $this->hasmany('App\ProfileHistory');
    }
}
