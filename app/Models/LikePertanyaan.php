<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePertanyaan extends Model
{
    use HasFactory;
    protected $table    = 'like_pertanyaan';
    public $timestamps   = false;
    protected $fillable = [
        'pertanyaan_id', 'user_id'
    ];
}
