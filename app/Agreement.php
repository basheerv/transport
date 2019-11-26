<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = ['contruct_with_driver', 'start_date','end_date', 'company_name', 'comp_address', 
    						'comp_office_no', 'comp_licence', 'com_mob_no', 'meter_reding', 'select_price', 'price','cheques',
    						'plat_no','agent', 'agent_name', 'agent_email', 'agent_address', 'agent_emr_id', 'agent_company_name'];

    public function transports(){
    	return $this->belongsTo('App\Transport');	
    }
}
