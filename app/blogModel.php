<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class BlogModel extends Model  {

 protected $table = 'tbluser';

 protected $fillable = [ 'username', 'password'];

 protected $primaryKey = 'id';

}
