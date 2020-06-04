<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
 //table name
 protected $tabel ='gyms';
 //primary key
 public $primarykey ='id';
 //timestamps
 public $timestamps =true ;


 public function user(){
    return $this->belongsTo('App\User','owner');
}

public function feedbacksfromuser(){
    return $this->hasMany('App\Feedback', 'belongs_to');
}

public function courses(){
    return $this->hasMany('App\Course');
}

}
