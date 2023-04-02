<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'message',
        'createdAt',
        'client',
        'subject'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
