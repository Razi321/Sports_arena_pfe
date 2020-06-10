<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    ////table name
 protected $tabel ='payments';
 //primary key
 public $primarykey = 'id';
 //timestamps
 public $timestamps =true ;
 public function owner(){
    return $this->belongsTo('App\User','user_id');
}

}
