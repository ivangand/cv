<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'summary',
        'education',
        'experience',
        'skills',
    ];

    // Optionally, you can also specify attributes that should be hidden
    protected $hidden = [
        // 'password', 'remember_token', etc.
    ];

    // Optionally, you can specify attributes that should be cast
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];
}
