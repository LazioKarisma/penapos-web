<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreModel extends Model
{
	public function scopeGetAllData() 
	{
		return $this::all();
	}
}