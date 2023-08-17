<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function sobre()
    {
        echo "Conteúdo dinâmico Sobre.";
    }

    public function contato()
    {
        echo "Conteúdo dinâmico Contato.";
    }
    public function servicos()
    {
        echo "Conteúdo dinâmico Servicos.";
    }
    public function servico($id)
    {
        $servicos = [
            1 => [
                'nome' => 'Programação de games',
                'descricao' => 'Descricao muito longa...'
            ],
            2 => [
                'nome' => 'Programação de sites',
                'descricao' => 'Descricao muito longa...'
            ],
            3 => [
                'nome' => 'Programação de softwares',
                'descricao' => 'Descricao muito longa...'
            ],
        ];
        
       return view('site.servico', [
        'servico' => $servicos[$id]
       ]);
    }
}
