<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
    {
        ini_set('max_execution_time', 300);
    }
    //generic function for initializing session
    protected function set_session($msg, $status){
	     session()->put('result', $status);
	     session()->put('msg', $msg);
    }    
}
