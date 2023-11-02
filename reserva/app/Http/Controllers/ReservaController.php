<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;
use App\Models\Reserva;
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('reserva.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorio_id = 1; // Define o primeiro laboratório como padrão.
        $laboratorios = Laboratorio::all(); // Obtém todos os laboratórios.

        return view('reserva.create', compact('laboratorio_id', 'laboratorios'));
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
            'LaboratorioID' => 'required',
            'DataInicio' => 'required',
            'Duracao' => 'required',
            'UserID' => 'required', // Certifique-se de ter um campo no formulário para selecionar o laboratório.
        ]); 

    // Recupere o ID do usuário autenticado.
        $userId = auth()->id();

    // Crie uma nova reserva associando o laboratório selecionado ao usuário.
        Reserva::create([
            'LaboratorioID' => $request->input('LaboratorioID'),
            'DataInicio' => $request->input('DataInicio'),
            'Duracao' => $request->input('DataInicio'),
            'UserID' => $userId,
    ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva criada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        return view('reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        return view('reserva.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //$reserva->update([
            //'DataInicio' => $request->input('DataInicio'),
           // 'Duracao' => $request->input('DataInicio'),
        //]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        if ($reserva->id_user == auth()->id()){
            $reserva->delete();
            return redirect()->route('home')->with('succes', 'Reserva excluída com sucesso.');
        } else{
            return redirect()->route('home')->with('error', 'Você não tem permissão para excluir esta reserva.');
        }
    }
}
