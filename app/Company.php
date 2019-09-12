<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function clientes(){
    	return $this->hasMany(Cliente::class);
    }

}
