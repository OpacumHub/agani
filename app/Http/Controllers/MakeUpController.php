<?php

/**
 * This just a cap for makeup
 *
 * Class MakeUpController
 * @package Kotopoisk\Http\Controllers
 */

namespace Kotopoisk\Http\Controllers;

use Kotopoisk\Http\Requests;
use Kotopoisk\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MakeUpController extends Controller {

    /**
     * Show feed page
     *
     * @return mixed
     */
    public function feed()
    {
        return view('app');
	}

}
