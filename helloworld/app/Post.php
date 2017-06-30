<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table='posts';
    //primary key
    public $primaryKey='id';
    //timestamps
    public $TimeStamps='true';
    public function user()
    {

        return $this->belongsto('App\User');
    }
}
