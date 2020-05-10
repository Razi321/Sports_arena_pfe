<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     // Table Name
   protected $table = 'courses';
   // Primary Key
   public $primaryKey = 'id_course';
   // Timestamps
   public $timestamps = true;

   public function gym(){
    return $this->belongsTo('App\Gym');
}

}
