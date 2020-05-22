<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class catalogController extends Controller
{
    
    public function getIndex() {
        $arrayPeliculas = Movie::all();        
        return view('index',['peliculas'=>$arrayPeliculas]);
    }
    
    public function getShow($id) {
        $movie = Movie::find($id);
        $movie = Movie::findOrFail($id);
        
        return view('show',['peliculas'=>$movie]);
    }
    
    public function getCreate(Request $request) {
        return view('create');
    }
    
    public function store(Request $request) {
        $p = new Movie();
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->rented = 0;
        $p->save();
        return redirect()->action('catalogController@getIndex');
    }
    public function edit($id)
    {
        $p = Movie::findOrFail($id);
        return view('edit',['p'=>$p]);
    }

    
    public function getEdit(Request $request, $id) {
        $p = Movie::findOrFail($id);
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->save();
        return redirect()->action('catalogController@getIndex');
    }

    public function postCreate(Request $request) {
        $p = new Movie();
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->rented = 0;
        $p->save();
        return redirect('catalog/');
    }


    public function putEdit(Request $request, $id) {
        $p = Movie::findOrFail($id);
        $p->title = $request->input('title');
        $p->year = $request->input('year');
        $p->director = $request->input('director');
        $p->poster = $request->input('poster');
        $p->synopsis = $request->input('synopsis');
        $p->save();
        return redirect('catalog/show'.$id);
    }


    public function getRented(String $id){
        $p = Movie::findOrFail($id);
        if($p->rented){
            $p->rented = 0;
        }else{
            $p->rented = 1;
        }
        $p->save();
        return redirect('/catalog/show/'.$p->id);
    }
}
