<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $nome = 'DevGames')
    {
        return view('saudacao', [
            'nome' => $nome,
        ]);
    }
}
