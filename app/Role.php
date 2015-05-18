<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Role extends Eloquent
{


    protected $table    = 'roles';

    protected $fillable = ['name','active'];



}
