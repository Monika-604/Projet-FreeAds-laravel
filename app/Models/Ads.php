<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table='ads';
    protected $fillable = [
        'title',
        'category',
        'description',
        'picture',
        'price',
        'location',
        'user_id'
    ];

    public function user()
    {
        return $this->$this->belongsTo('App\Models\User','user_id');
    }

}
