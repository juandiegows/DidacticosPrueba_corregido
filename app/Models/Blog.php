<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'user_id', 'created_at'];
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
