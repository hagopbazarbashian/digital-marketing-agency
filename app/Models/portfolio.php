<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
        'image',
        'startdate',
        'enddate',
        'client',
        'category',
        'title',
        'link'
    ];
}
