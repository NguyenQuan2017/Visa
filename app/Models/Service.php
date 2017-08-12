<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=['name_service'];

    public function card(){

    	return $this->belongsTo('App\Models\VisaCard','card_id','id');
    }
}
