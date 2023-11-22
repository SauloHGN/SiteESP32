<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspData extends Model
{
    use HasFactory;

    protected $table = 'espdata';
    protected $fillable = ['id', 'nome_arq', 'tempo_exec', 'data_exec'];
}
