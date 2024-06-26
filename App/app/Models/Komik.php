<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    use HasFactory;
    // protected $table="komik";
    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'komik_id');
    }
}