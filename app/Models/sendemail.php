<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendemail extends Model
{
    protected $fillable = [
        'email',
        'title',
        'body'
    ];
}
