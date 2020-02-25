<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listado()
    {
        $frutas = DB::table('fruta')
        ->orderBy('id','desc')
        ->get();
        
        return view('frutas.listado',compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frutas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frutas = DB::table('fruta')->insert(array(
            'nombre'=>$request->input('nombre'),
            'descripcion'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date('Y-m-d')
        ));
        
        return redirect()->action('FrutaController@listado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalles($id)
    {
        $fruta = DB::table('fruta')
        ->where('id', $id)->first();
        
        return view('frutas.detalles', ['fruta'=>$fruta]);
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
            $fruta = DB::table('fruta')
                ->where('id',$id)
                ->update([
                    'nombre'=>$request->input('nombre'),
                    'descripcion'=>$request->input('descripcion'),
                    'precio'=>$request->input('precio'),
                ]);
                
        return redirect()->action('FrutaController@listado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(String $id)
    {
        $fruta = DB::table('fruta')->where('id',$id)->delete();
        return redirect()->action('FrutaController@listado');
    }
}
