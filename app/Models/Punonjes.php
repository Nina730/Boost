<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punonjes extends Model
{
    use HasFactory;
    
    protected $table = 'punonjesit';

    protected $fillable = [
        'emer',
        'mbiemer',
        'pozicioni',
        'paga_ore',
        'data_rregjister',
        
    ];
}
