<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    // protected $table = "chapter";

    public function komik()
    {
        return $this->belongsTo(Komik::class, 'komik_id');
    }
}