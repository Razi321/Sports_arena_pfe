<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
   // Table Name
   protected $table = 'feedbacks';
   // Primary Key
   public $primaryKey = 'id';
   // Timestamps
   public $timestamps = true;


   public function gym(){
    return $this->belongsTo('App\Gym','belongs_to');
}
public function usersfeed(){
    return $this->belongsTo('App\User','user_id');
}
}



