<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    public static function hasChecked(){

    	$isLive = Setting::where('id', 1)->get()->toArray();
    	
    	if ($isLive[0]['is_live']) {
    		return false;
    	}else{
    		return true;
    	}
    }
}
