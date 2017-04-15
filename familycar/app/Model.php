<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Model extends Model
{
    protected $table = 'model';

    protected $fillable = ['name','year'];

    public $timestamps = false;

    public function cars()
     {
     	return $this->hasMany(Car::class,'model_id'); 
     }
}
