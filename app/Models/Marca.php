<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'marcas'; // Nome da tabela no banco
    protected $fillable = ['nome']; // Campos preenchíveis
    public $timestamps = false; // Não utiliza timestamps

    public function carros()
    {
        return $this->belongsToMany(Carro::class);
    }
}
