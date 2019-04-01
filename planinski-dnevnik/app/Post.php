<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
