<?php

namespace App\Http\Controllers;

use App\Models\Automovil;
use Illuminate\Http\Request;

class AutomovilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $automoviles=Automovil::all();
        return view('admin.automovil.lista',compact('automoviles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.automovil.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'marca'=>'required',
            'modelo'=>'required',
            'color'=>'required',
            'precio'=>'required',
            'matricula'=>'required'
        ]);
        $automovil=new Automovil;
        $automovil->marca=$request->marca;
        $automovil->modelo=$request->modelo;
        $automovil->color=$request->color;
        $automovil->precio=$request->precio;
        $automovil->matricula=$request->matricula;
        $automovil->save();
        return redirect('/automovil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $automovil=Automovil::find($id);
        return view('admin.automovil.mostrar',compact('automovil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $automovil=Automovil::find($id);
        return view('admin.automovil.editar',compact('automovil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $request->validate([
            'marca'=>'required',
            'modelo'=>'required',
            'color'=>'required',
            'precio'=>'required',
            'matricula'=>'required'
        ]);
        $automovil=Automovil::find($id);
        $automovil->marca=$request->marca;
        $automovil->modelo=$request->modelo;
        $automovil->color=$request->color;
        $automovil->precio=$request->precio;
        $automovil->matricula=$request->matricula;
        $automovil->save();
        return redirect('/automovil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Automovil  $automovil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $automovil=Automovil::find($id);
        $automovil->delete();
        return redirect('/automovil');
    }
}
