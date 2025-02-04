<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    public $timestamps = false;
}
