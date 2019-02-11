<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{
    //
    /**
     * Index.
     *
     * @return View
     */
    public function index()
    {
        return view('site/voyages');
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        // return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
