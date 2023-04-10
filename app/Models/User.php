<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'last_name',
        'birth_day',
        'email',
        'password',
        'role_id',
        'created_at',
        'active'
    ];
    public function blogs(): HasOne
    {
        return $this->HasOne(Blog::class);
    }
    public function role(): BelongsTo
    {
        return $this->BelongsTo(Role::class);
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'birth_day' => 'datetime',
        'created_at' => 'datetime',
    ];
}
