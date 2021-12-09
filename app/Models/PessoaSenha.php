<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PessoaSenha
 * @property string $ps_pessoa
 * @property string $ps_senha
 * 
 *
 * @package App\Models
 */
class PessoaSenha extends Model
{
    protected $table = 'pessoa_senha';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'ps_pessoa',
        'ps_senha',
    ];
}
