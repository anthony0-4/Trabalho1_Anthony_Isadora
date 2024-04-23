<?php

namespace App\Http\Controllers;

use App\Models\Livraria;
use App\Models\Estados;
use Illuminate\Http\Request;

class LivrariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Livraria::all();

        // dd($dados);

        return view("livraria.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estados::all();

        return view("livraria.form",['estados'=>$estados]);
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
            'nome' => "required|max:100",
            'endereco' => "required|max:100",
            'cnpj' => "required|max:14",
            'cidade' => "required|max:100",
            'estados_id' =>"required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'endereco.required' => "O :attribute é obrigatório",
            'endereco.max' => "Só é permitido 100 caracteres",
            'cnpj.required' => "O :attribute é obrigatório",
            'cnpj.max' => "Só é permitido 14 caracteres",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",
            'estados_id.required' => "O :attribute é obrigatório",
        ]);

        Livraria::create(
            [
                'nome' => $request->nome,
                'endereco' => $request->endereco,
                'cnpj' => $request->cnpj,
                'cidade' => $request->cidade,
                'estados_id' => $request->estados_id,
            ]
        );
        return redirect('livraria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livraria  $livraria
     * @return \Illuminate\Http\Response
     */
    public function show(Livraria $livraria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livraria  $livraria
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $dado = Livraria::findOrFail($id);

        $estados = Estados::all();


        return view("livraria.form", [
            'dado' => $dado,
            'estados'=> $estados,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livraria  $livraria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livraria $livraria)
    {
        $request->validate([
            'nome' => "required|max:100",
            'endereco' => "required|max:100",
            'cnpj' => "required|max:14",
            'cidade' => "required|max:100",
            'estados_id' =>"required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'endereco.required' => "O :attribute é obrigatório",
            'endereco.max' => "Só é permitido 100 caracteres",
            'cnpj.required' => "O :attribute é obrigatório",
            'cnpj.max' => "Só é permitido 14 caracteres",
            'cidade.required' => "O :attribute é obrigatório",
            'cidade.max' => "Só é permitido 100 caracteres",
            'estados_id.required' => "O :attribute é obrigatório",
        ]);

        Livraria::updateOrCreate(
            ['id'=>$request->id],
            [
                'nome' => $request->nome,
                'endereco' => $request->endereco,
                'cnpj' => $request->cnpj,
                'cidade' => $request->cidade,
                'estados_id' => $request->estados_id,
            ]
        );
        return redirect('livraria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livraria  $livraria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dado = Livraria::findOrFail($id);
        $dado->delete();
        return redirect('livraria');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Livraria::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Livraria::all();
        }
        // dd($dados);

        return view("livraria.list", ["dados" => $dados]);
    }
}
