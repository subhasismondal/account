<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;



class User  extends Model implements Authenticatable{
   public $timestamps=false;
   use AuthenticableTrait;
}
