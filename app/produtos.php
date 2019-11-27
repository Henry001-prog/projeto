<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['name','price','entry_date'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'produtos';

}
