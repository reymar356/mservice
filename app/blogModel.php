<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class blogModel extends Model  {

 protected $table = 'tbluser';

 protected $fillable = [ 'username', 'password'];

}
