<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\User;
use App\Type;
use App\Model;
use App\Bidding;

class Car extends Model
{
    protected $table = 'car';

    protected $fillable = ['brand_id','user_id','model_id','type_id','status','end_bidding_time'];

    public $timestamps = false;

    public function brand()
	{
		return $this->belongsTo(Brand::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	public function model()
	{
		return $this->belongsTo(Model::class);
	}
	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	public function bidding()
	{
		return $this->hasMany(Bidding::class,'car_id'); 
	}

}
