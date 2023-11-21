<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'laboratorio_id',
        'UserID',
        'data_inicio',
        'duracao',
    ];

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorio_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
}
