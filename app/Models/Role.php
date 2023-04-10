<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestamps = false;

    public function blogs(): HasOne
    {
        return $this->HasOne(User::class);
    }
}
