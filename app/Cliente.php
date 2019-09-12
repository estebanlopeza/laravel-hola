<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	// protected $fillable = ['name' , 'email' , 'active'];

	protected $guarded = [];

    //Valores por defecto
    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attr){
        return $this->activeOptions()[$attr];
    }

    public function scopeActive($query){
		return $query->where('active', 1);
    }

    public function scopeInactive($query){
		return $query->where('active', 0);
    }

    public function company(){
    	return $this->belongsTo(Company::class);
    }

    public function activeOptions(){

        return [
            1 => 'Activo',
            0 => 'Inactivo',
            2 => 'En progreso',
        ];
    }

}
