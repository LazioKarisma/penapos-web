<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Models;

class User extends CoreModel
{
	protected $table = 'user';
	public $incrementing = false;
	protected $keyType = 'string';
	public $timestamps = false;
}