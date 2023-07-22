<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singlebasicpage extends Model
{
    protected $fillable = [
        'page_id',
        'name',
        'icon'
    ];

    public function page(){
        return $this->belongsTo(page::class , 'page_id');
    }
}
