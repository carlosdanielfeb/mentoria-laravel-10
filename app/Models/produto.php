<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $filable = [
        'nome',
        'valor',
    ];
    
    function getProdutosPesquisarIndex(string $search = '')
    { {
            $produto = $this->where(function ($query) use ($search) {
                if ($search) {
                    $query->where('nome', $search);
                    $query->orWhere('nome', 'LIKE', "%{$search}%");
                }
            })->get();
            return $produto;
        }
    }
}
