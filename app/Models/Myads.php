<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myads extends Model
{
    use HasFactory;
    protected $table='myads';
    protected $fillable = [
        'username ',
        'firstname',
        'lastname',
        'email',
        'cell_number',
        'new_password',
        'confirm new_password',
        'user_id'
    ];
}
