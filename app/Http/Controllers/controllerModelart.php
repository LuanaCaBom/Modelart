<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerModelart extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Modelart::all();
        return view('exibirObras', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novaObra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Modelart();
        $dados->nomeObra = $request->input('nomeObra');
        $dados->artistaObra = $request->input('artistaObra');
        $dados->tipoObra = $request->input('tipoObra');
        $dados->estiloObra = $request->input('estiloObra');
        $dados->imagemObra = $request->input('imagemObra');
        $dados->dataObra = $request->input('dataObra');
        $dados->save();
        return redirect('/obras')->with('success', 'Nova obra cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Modelart::find($id);
        if(isset($dados)){
            return view('editarObra', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Modelart::find($id);
        if(isset($dados)){
            $dados->nomeObra = $request->input('nomeObra');
            $dados->artistaObra = $request->input('artistaObra');
            $dados->tipoObra = $request->input('tipoObra');
            $dados->estiloObra = $request->input('estiloObra');
            $dados->imagemObra = $request->input('imagemObra');
            $dados->dataObra = $request->input('dataObra');
            $dados->save();
            return redirect('/obras')->with('success', 'Nova obra cadastrada com sucesso.');
        }
        return redirect('/obras')->with('danger', 'Erro ao tentar atualizar obra.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Modelart::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/obras')->with('success', 'Nova obra cadastrada com sucesso.');
        }
        return redirect('/obras')->with('danger', 'Erro ao tentar atualizar obra.');
    }

    public function pesquisarObra(){
        return view('pesquisarObra');
    }

    public function procurarObra(Request $request){
        $nome = $request->input('nomeContato');
        $dados = DB::table('obras')->select('id', 'nomeObra', 'artistaObra', 'tipoObra', 'estiloObra', 'imagemObra', 'dataObra')
                 ->where(DB::raw('lower(nomeObra)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirObras', compact('dados'));
    }
}
