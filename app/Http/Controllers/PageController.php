<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    /**
     * Accueil.
     *
     * @return View
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * About.
     *
     * @return View
     */
    public function about()
    {
        return view('site/about');
    }


}
