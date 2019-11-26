<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['model', 'plat_no', 'tag_no', 'owner_name', 'owner_passport', 'emr_id', 'owner_mob_number', 'year', 'chassis_no', 'city', 'category', 'color','weight', 'temperature', 'status','start_date','end_date'];

     public function agreements(){
    	return $this->hasMany('App\Agreement');	
    }
}

