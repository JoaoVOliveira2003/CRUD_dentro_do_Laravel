<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $table = 'carros'; // Nome da tabela no banco
    protected $fillable = ['modelo', 'ano', 'marca_id']; // Campos preenchíveis
    public $timestamps = false; // Não utiliza timestamps

    public function marca()
    {
        return $this->belongsToMany(Marca::class);
    }
}
