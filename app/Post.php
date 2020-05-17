<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     //table name
    protected $tabel ='posts';
    //primary key
    public $primarykey ='id';
    //timestamps
    public $timestamps =true ;
}
