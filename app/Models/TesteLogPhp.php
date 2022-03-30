<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id_fk
 * @property mixed $name
 */
class TesteLogPhp extends Model
{
    protected $table = 'teste_log_php';
    protected $fillable = ['id_fk', 'name'];

    use HasFactory;

}
