<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;

use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
        {
            
            $categorias =  Categoria::orderBy('created_at', 'DESC')->get();

            return view('vistas.categoria', compact('categorias'));
                    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.nuevaCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        
        $image = request()->file('image');
        $imageName = $image->getClientOriginalName();
        $imageName = time().'_'.$imageName;

        $image->move(public_path('/images'), $imageName);

        //quitando esto ejecuta y guarda la img
        /*$img = new Categoria;
        $img->image = 'images/'.$imageName;
        $img->save();*/

        return Categoria::Create([
            'nombre' => $request->nombre,
            'image' => 'images/'.$imageName,
            'descripcion' => $request->descripcion
            
        ]);

        
        //$categoria = new Categoria();
        //$categoria->nombre = $request->nombre;
        //$categoria->save();

        /*DB::table('categorias')->insert([
            "nombre" => $request->input('nombre'),
        ]);*/

        //return redirect()->action('CategoriaController@index');
        //return redirect()->route('categoriaindex');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
