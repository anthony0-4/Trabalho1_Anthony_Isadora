<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //app/http/Controller
        $dados = Categoria::all();

        // dd($dados);

        return view("categoria.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categoria.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoria' => "required|max:100",
            'genero' => "required|max:16",
            'lancamento' => "nullable"
        ], [
            'categoria.required' => "O :attribute é obrigatório",
            'categoria.max' => "Só é permitido 100 caracteres",
            'genero.required' => "O :attribute é obrigatório",
            'genero.max' => "Só é permitido 16 caracteres",
        ]);

        Categoria::create(
            [
                'categoria' => $request->categoria,
                'lancamento' => $request->lancamento,
                'genero' => $request->genero,
            ]
        );
        return redirect('categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {

        $dado = Categoria::findOrFail($id);


        return view("categoria.form", [
            'dado' => $dado,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'categoria' => "required|max:100",
            'genero' => "required|max:16",
            'lancamento' => "nullable"
        ], [
            'categoria.required' => "O :attribute é obrigatório",
            'categoria.max' => "Só é permitido 100 caracteres",
            'genero.required' => "O :attribute é obrigatório",
            'genero.max' => "Só é permitido 16 caracteres",
        ]);

        Categoria::updateOrCreate(
            ['id'=>$request->id],
            [
                'categoria' => $request->categoria,
                'lancamento' => $request->lancamento,
                'genero' => $request->genero,
            ]
        );
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dado = Categoria::findOrFail($id);
        $dado->delete();
        return redirect('categoria');
    }

    public function search(Request $request)
    {
        if (!empty($request->categoria)) {
            $dados = Categoria::where(
                "categoria",
                "like",
                "%" . $request->categoria . "%"
            )->get();
        } else {
            $dados = Categoria::all();
        }
        // dd($dados);

        return view("categoria.list", ["dados" => $dados]);
    }
}
