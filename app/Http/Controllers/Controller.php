<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // this is a bug
    // release 1.0.0
    // hard fix 2
    // test push
    public function diamond(){
        /*
         * todo: testing
         */

    function hiEveryOne()
    {
        return 'hihi 你們好233456';
    }
}
