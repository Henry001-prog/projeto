<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = ['name','cpf','address','telephone'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'cliente';


}
