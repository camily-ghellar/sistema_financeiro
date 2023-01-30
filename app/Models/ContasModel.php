<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContasModel extends Model
{
    use HasFactory;

    protected $table = 'contas';

    protected $fillable = [
        'id_pessoa',
        'numero_conta',
    ];
}
