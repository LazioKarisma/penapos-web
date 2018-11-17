<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Models;

class UserGroup extends CoreModel
{
	protected $table = 'user_group';
	public $incrementing = false;
	protected $keyType = 'string';
    public $timestamps = false;
    
    public function scopeGetUserGroupForCombo() 
    {
        return $this::select('Id','Description')
                    ->where('Role','<>','0')
                    ->where('Active','Aktif')
                    ->orderBy('GroupCode','asc')
                    ->get();    
    }
}