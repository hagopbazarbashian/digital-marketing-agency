<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'topic',
        'body'
    ];
}
