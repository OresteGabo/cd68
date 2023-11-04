<?php


namespace App;

use Illuminate\Auth\Auth;

class MyAuth extends Auth
{

    public function check()
    {
        // This is the modified check function.
        return true;
    }

}
