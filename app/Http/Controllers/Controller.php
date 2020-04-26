<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Controller constructor.
     */
    public function __construct() {
        self::setViewAssign('session', Session::class);
    }

    /**
     * Assigning to a view variable
     *
     * @param $key
     * @param $value
     * @return mixed
     */
    protected static function setViewAssign($key, $value)
    {
        return \Illuminate\Support\Facades\View::share($key, $value);
    }

    /**
     * Assigning a variable to the template body
     *
     * @param $key
     * @param $value
     * @return mixed
     */
    protected function assign($key, $value)
    {
        return self::setViewAssign($key, $value);
    }
}
