<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use FormAccessible;
    protected $table = 'comments';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
