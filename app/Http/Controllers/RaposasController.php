<?php

namespace App\Http\Controllers;

use App\Models\Raposa;
use Illuminate\Http\Request;

class RaposasController extends Controller
{
    //Lista todos os gatos cadastrado
    public function index()
    {
        // Pega todos os registos da tabela relacionada ao modelo Gato
        $raposa = Raposa::all();

        // Manda os dados para uma view, no caso gatos.index
        return view('raposas.index', compact('gatos'));
    }

    /**
     * Mostra o formulário para criar um novo gato
     */
    public function create()
    {
        return view('gatos.create');
    }

    /**
     * Armazena uma nova raposa
     */
    public function store(Request $requisicao)
    {
        // Cria um novo objeto do tipo Raposa em branco
        $raposa = new Raposa();

        // Preenche os campos do objeto com os dados da requisição
        $raposa->nome = $requisicao->nome;
        $raposa->raca = $requisicao->raca;
        $raposa->idade = $requisicao->idade;

        // Salva o objeto no banco de dados
        $raposa->save();

        // Redireciona para a página de detalhes do raposa
        return redirect()->route('raposa.show', $raposa->id);
    }

    /**
     * Mostra um raposa específica
     */
    public function show($id)
    {
        return 'Oi, eu sou a raposa de id ' . $id . '!';
    }

    /**
     * Mostra o formulário para editar um gato específico
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um gato específico
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um gato específico
     */
    public function destroy($id)
    {

    }
}
