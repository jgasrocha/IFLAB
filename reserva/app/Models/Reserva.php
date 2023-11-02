<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'LaboratorioID',
        'UserID',
        'DataInicio',
        'DataFim',
    ];

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'LaboratorioID');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
