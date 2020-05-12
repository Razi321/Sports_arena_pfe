<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
     //table name
 protected $tabel ='memberships';
 //primary key
 public $primarykey ='id';
 //timestamps
 public $timestamps =true ;

 public function userMember(){
    return $this->belongsTo('App\User','user_id');
}
public function belongGym(){
    return $this->belongsTo('App\Gym');
}
public function memberIncourse(){
    return $this->belongsTo('App\Course');
}

}
