<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    use HasFactory;

    protected $fillable = ['phone_id', 'processor', 'camera', 'battery'];

    public function phone() {
        return $this->belongsTo('App\Models\Phone');
    }
}
