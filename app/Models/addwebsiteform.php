<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addwebsiteform extends Model
{ 
    protected $fillable = [
        'name',
        'lastname',
        'phonenumber',
        'websitekind',
        'message'
    ];
}
