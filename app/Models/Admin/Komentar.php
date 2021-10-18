<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'komentars';
    protected $fillable     = [
        'komentar', 'jawaban_id'
    ];

    public function getJawaban()
    {
        return $this->belongsTo(Jawaban::class, 'jawaban_id', 'id');
    }
}
