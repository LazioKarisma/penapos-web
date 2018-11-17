<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generateTableId($modulName) 
    {
    	$currentDateTime = date("YmdHis");
    	$randomNumber = mt_rand(10000000, 99999999);

    	$id = $modulName . '-' . $currentDateTime . '-' . $randomNumber;

    	return $id;
    }
}
