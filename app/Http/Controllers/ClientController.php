<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    /**
     * Lista os clientes
     * 
     * @return View
     */
    public function index(): View
    {
       $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra um cliente específico
     * 
     * @return View
     */
    public function show($id): View
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }
    
    /**
     * Exibi o formulário de cadastro
     * 
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Cria um cliente no banco de dados
     * 
     * @return RedirectResponse
     */

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Mostra o formulário com os dados do cliente para edição.
     * 
     * @return View
     */

    public function edit($id): View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Atualiza o cliente no banco de dados.
     * 
     * @return RedirectResponse
     */
    public function update($id, Request $request): RedirectResponse
    {
        $client = Client::find($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);
        return redirect('/clients');
    }

    /**
     * Apaga o cliente no banco de dados.
     * 
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/clients');
    }
}
