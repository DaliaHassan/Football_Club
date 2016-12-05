<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'clubs';
    protected $fillable = array(
        'name',
        'logo'
    );
    public $timestamps = false;

}


