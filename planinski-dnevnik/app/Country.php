<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
