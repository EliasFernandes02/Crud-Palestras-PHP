<?php 

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Palestra extends Model
{
    use HasFactory;

    protected $table = 'tb_palestra';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'nome',
        'palestrante',
        'assunto',
        'hora',
    ];
}