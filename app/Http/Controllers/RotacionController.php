<?php

namespace App\Http\Controllers;

use App\Models\Rotacion;
use Illuminate\Http\Request;

class RotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotaciones = Rotacion::all();
        return view('rotacion.index', compact('rotaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'fecha'=>'required|max:255',
        ]);
        $show = Rotacion::create($validateData);
        return redirect('/rotacion')->with('success','Departamento Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rotaciones = Rotacion::findOrFail($id);
        return view('rotacion.edit',compact('rotaciones'));
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
        $validateData = $request->validate([
            'fecha'=>'required|max:255',
        ]);
        $show = Rotacion::create($validateData);
        return redirect('/rotacion')->with('success','Departamento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rotaciones = Rotacion::findOrFail($id);
        $rotaciones->delete();
        return redirect('/rotacion')->with('success','Datos borrados');
    }
}
