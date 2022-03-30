<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $name
 * @property mixed $id
 */
class Teste extends Model
{
    protected $table = 'teste';
    protected $fillable = ['name'];

    use HasFactory;

}
