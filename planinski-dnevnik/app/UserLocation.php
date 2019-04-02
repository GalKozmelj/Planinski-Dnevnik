<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    protected $table = 'users_locations';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
