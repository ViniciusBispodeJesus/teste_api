<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;
    protected $table = 'concessionaria.venda';
    protected $primaryKey = 'id_venda';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
