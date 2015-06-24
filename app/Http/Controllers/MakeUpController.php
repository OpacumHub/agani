<?php

/**
 * This just a cap for makeup
 *
 * Class MakeUpController
 * @package Agani\Http\Controllers
 */

namespace Agani\Http\Controllers;

use Agani\Http\Requests;
use Agani\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MakeUpController extends Controller {

    /**
     * Show index page
     *
     * @return mixed
     */
    public function index()
    {
        return view('app');
	}

}
