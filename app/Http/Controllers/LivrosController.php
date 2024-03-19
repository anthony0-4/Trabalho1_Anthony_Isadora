<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Models\Estrelas;
use Illuminate\Http\Request;


class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Livros::all();

        // dd($dados);

        return view("livros.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estrelas = Estrelas::all();

        return view("livros.form",['estrelas'=>$estrelas]);
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
            'titulo' => "required|max:100",
            'autor' => "required|max:100",
            'estrelas_id' =>"required",
            'paginas' => "nullable"
        ], [
            'titulo.required' => "O :attribute é obrigatório",
            'titulo.max' => "Só é permitido 100 caracteres",
            'autor.required' => "O :attribute é obrigatório",
            'autor.max' => "Só é permitido 100 caracteres",
            'estrelas_id.required' => "O :attribute é obrigatório",
        ]);

        Livros::create(
            [
                'titulo' => $request->titulo,
                'autor' => $request->autor,
                'paginas' => $request->paginas,
                'estrelas_id' => $request->estrelas_id,
            ]
        );
        return redirect('livros');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $dado = Livros::findOrFail($id);

        $estrelas = Estrelas::all();


        return view("livros.form", [
            'dado' => $dado,
            'estrelas'=> $estrelas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livros $livros)
    {
        $request->validate([
            'titulo' => "required|max:100",
            'autor' => "required|max:100",
            'estrelas_id' => "required",
            'paginas' => "nullable"
        ], [
            'titulo.required' => "O :attribute é obrigatório",
            'titulo.max' => "Só é permitido 100 caracteres",
            'autor.required' => "O :attribute é obrigatório",
            'autor.max' => "Só é permitido 100 caracteres",
            'estrelas_id.required' => "O :attribute é obrigatório"
        ]);

        Livros::updateOrCreate(
            ['id'=>$request->id],
            [
                'titulo' => $request->titulo,
                'autor' => $request->autor,
                'paginas' => $request->paginas,
                'estrelas_id' => $request->estrelas_id,
            ]
        );
        return redirect('livros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dado = Livros::findOrFail($id);
        $dado->delete();
        return redirect('livros');
    }

    public function search(Request $request)
    {
        if (!empty($request->titulo)) {
            $dados = Livros::where(
                "titulo",
                "like",
                "%" . $request->titulo . "%"
            )->get();
        } else {
            $dados = Livros::all();
        }
        // dd($dados);

        return view("livros.list", ["dados" => $dados]);
    }
}
