<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Index.
     *
     * @return View
     */
    public function index()
    {
        // $voyages = Voyage::all();
        // var_dump($voyages);die;
        return view('site/voyages', ['voyages' => Voyage::all()]);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        // $voyage = Voyage::findOrFail($id);
        // var_dump($voyage);die;
        // return view('site/voyage-detail');
        return view('site/voyage-detail', ['voyage' => Voyage::find($id)]);
    }

    /**
     * Index.
     *
     * @return View
     */
    public function search(Request $request)
    {
        $pays = $request->get('location');
        // $results = Voyage::where('pays', 'like', "%$pays%")->get();
        // dd($results);
        return view('site/voyages', ['voyages' => Voyage::where('pays', 'like', "%$pays%")->get()]);
    }
}
