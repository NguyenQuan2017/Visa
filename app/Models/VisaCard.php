<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaCard extends Model
{
	protected $table='visacards';
    protected $fillable=['name','id_card','valid_date','code','service'];

    public function services(){

    	return $this->hasMany('App\Models\Service','card_id','id');
    }
}
