<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimentacoesModel extends Model
{
    use HasFactory;

    protected $table = 'movimentacoes';

    protected $fillable = [
        'id_pessoa',
        'id_conta',
        'valor',
        'dep_ret',
    ];
}
