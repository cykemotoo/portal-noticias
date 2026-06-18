<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Lista as Notícias do banco
     */
    public function index()
    {
        return view('admin.noticias.index');
    }

    /**
     * Chamar a view do cadastrar notícias
     */
    public function create()
    {
        //
    }

    /**
     * Armazenar os Dados da noticias, enviado pelo formúlario
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Chamar a view do editar notícias
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Armazemar a atualização dos bancos da notícia
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Excluir uma notícia do banco de dados
     */
    public function destroy(string $id)
    {
        //
    }
}
