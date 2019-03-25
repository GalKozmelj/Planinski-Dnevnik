<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
