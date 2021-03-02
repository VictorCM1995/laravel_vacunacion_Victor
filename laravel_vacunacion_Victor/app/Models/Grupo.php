<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function vacunas(){
		return $this->hasMany(Vacuna::class);
	}
}
