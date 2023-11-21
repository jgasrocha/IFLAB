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
        $reservas = Reserva::paginate(6);
        return view('reserva.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorio_id = 1; 
        $laboratorios = Laboratorio::all();

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
        'laboratorio_id' => 'required',
        'data_inicio' => 'required',
        'duracao' => 'required',
    ]);

    $user = auth()->user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'Usuário não autenticado.');
    }

    $reservaData = $request->only(['laboratorio_id', 'data_inicio', 'duracao']);
    $reservaData['UserID'] = $user->id;

    Reserva::create($reservaData);

    return redirect()->route('reservas.home')->with('success', 'Reserva criada com sucesso.');
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
    $user = auth()->user();

    if ($reserva->user->id == $user->id) {
        $reserva->delete();
        return redirect()->route('reservas.home')->with('success', 'Reserva excluída com sucesso.');
    } else {
        return redirect()->route('reservas.home')->with('error', 'Você não tem permissão para excluir esta reserva.');
    }
    }

}
