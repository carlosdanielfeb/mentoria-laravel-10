<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

  
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function getUsuarioPesquisarIndex(string $search = '')
    { {
            $user= $this->where(function ($query) use ($search) {
                if ($search) {
                    $query->where('name', $search);
                    $query->orWhere('name', 'LIKE', "%{$search}%");
                }
            })->get();
            return $user;
        }
    }
}
