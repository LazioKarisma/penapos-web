<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Models;

class StoreProfile extends CoreModel
{
	protected $table = 'store_profile';
	public $incrementing = false;
	protected $keyType = 'string';
    public $timestamps = false;
    
    public function scopeGetStoreProfileForCombo() 
    {
        return $this::select('Id','StoreName')
                    ->where('Active','Aktif')
                    ->orderBy('StoreCode','asc')
                    ->get();    
    }
}