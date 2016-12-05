<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'matches';
    protected $fillable = array(
        'name',
        'season',
        'logo'
    );
    public $timestamps = false;
}
