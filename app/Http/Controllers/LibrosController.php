<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosLibro['libros']=libros::paginate(25);

        return view('libros.index',$datosLibro);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('libros.create');
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

        //$datosLibro = request()->all();
        $datosLibro=request()->except('_token');
        libros::insert($datosLibro);

        //return response() ->json($datosLibro);
        return redirect('libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro = libros::findOrfail($id);

        return view('libros.edit',compact('libro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosLibro=request()->except(['_token','_method']);
        libros::where('id','=',$id)->update($datosLibro);
        
        $libro = libros::findOrfail($id);

        //return view('libros.edit',compact('libro'));
        return redirect('libros');

          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        libros::destroy($id);
        return redirect('libros');
        

    }
}
