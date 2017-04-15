<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carcompany;
use App\Car;


class Brand extends Model
{
    protected $table = 'brand';

    protected $fillable = ['name','car_company_id'];

    public $timestamps = false;

    public function carcompany()
	{
		return $this->belongsTo(Carcompany::class);
	}

	 public function cars()
     {
     	return $this->hasMany(Car::class,'brand_id'); 
     }
}
