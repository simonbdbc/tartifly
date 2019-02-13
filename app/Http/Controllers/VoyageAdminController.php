<?php

namespace App\Http\Controllers;

use App\Voyage;
use Illuminate\Http\Request;

class VoyageAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('admin')->only('liste-voyages');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $voyages = Voyage::all();
        // var_dump($voyages);die;
        return view('admin/liste-voyages', ['voyages' => Voyage::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create-voyage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'libelle'=>'required|string',
            'pays'=> 'required|string',
            'ville' => 'required|string',
            'duree' => 'required|integer',
            // 'date_debut' => 'required|string',
            // 'date_fin' => 'required|string',
            'cout' => 'required|integer',
            // 'photo' => 'required|integer',
            // 'description' => 'required|string',
            'disponibilite' => 'required|integer',
        ]);
        $voyage = new Voyage([
            'libelle' => $request->get('libelle'),
            'pays'=> $request->get('pays'),
            'ville'=> $request->get('ville'),
            'duree'=> $request->get('duree'),
            'date_debut'=> $request->get('date_debut'),
            'date_fin'=> $request->get('date_fin'),
            'cout'=> $request->get('cout'),
            'photo'=> $request->get('photo'),
            'description'=> $request->get('description'),
            'disponibilite'=> $request->get('disponibilite'),
        ]);
        $voyage->save();
        return redirect()->route('liste')->with('success', 'Stock has been added');

        // $voyage = new Voyage;
        // $voyage->libelle = $request->libelle;
        // $voyage->pays = $request->pays;
        // $voyage->ville = $request->ville;
        // $voyage->duree = $request->duree;
        // $voyage->date_debut = $request->date_debut;
        // $voyage->date_fin = $request->date_fin;
        // $voyage->cout = $request->cout;
        // $voyage->photo = $request->photo;
        // $voyage->description = $request->description;
        // $voyage->disponibilite = $request->disponibilite;

        // $voyage->save();
        // // dd($voyage);
        // return redirect()->route('liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $voyage = Voyage::findOrFail($id);
        // var_dump($voyage);die;
        // return view('admin/edit-voyage');
        return view('admin/edit-voyage', ['voyage' => Voyage::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voyage = Voyage::find($id);
        // dd($voyage);
        $voyage->libelle = $request->libelle;
        $voyage->pays = $request->pays;
        $voyage->ville = $request->ville;
        $voyage->duree = $request->duree;
        $voyage->date_debut = $request->date_debut;
        $voyage->date_fin = $request->date_fin;
        $voyage->cout = $request->cout;
        $voyage->photo = $request->photo;
        $voyage->description = $request->description;
        $voyage->disponibilite = $request->disponibilite;

        $voyage->save();
        return redirect()->route('liste');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();
        // return redirect()->route('liste');

        return redirect()->route('liste')->with('success', 'Item Has Been Delete');
    }
}
