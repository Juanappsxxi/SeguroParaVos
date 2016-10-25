<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Categoria;
use App\Seguro;

class SeguroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguros = Seguro::all();
        return view('seguros.index', ['seguros' => $seguros, 'classes_seguros' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $seguros = Seguro::all();
        
        return view(
            'seguros.create',
            [
                'seguros' => $seguros,
                'categorias' => $categorias
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'categoria' => 'required',
            'pago' => 'required',
            'valor_cobertura' => 'required',
            'unidad_cobertura' => 'required',
            'aseguradora' => 'required'
        ]);

        $input = $request->all();
        $input['estado'] = isset ($input['estado']) && $input['estado'] == 'on' ? 1 : 0;

        Seguro::create($input);

        Session::flash('flash_message', 'El seguro se ha creado con éxito!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seguro = Seguro::findOrFail($id);
        return view('seguros.show', ['seguro' => $seguro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        return view('seguros.edit', ['categorias' => $categorias]);
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
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // $categoria = Categoria::findOrFail($id);
        // return view('categorias.delete')->withCategoria($categoria);
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
