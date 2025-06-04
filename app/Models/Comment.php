<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'content',
        'is_approved',
    ];

    // Komentar pripada korisniku
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
