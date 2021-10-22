<?php

namespace App\Models\User;

use App\Models\User\Jawaban;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabKomentar extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'jawab_komentars';
    protected $fillable     = [
        'jawab_komentar', 'jawaban_id'
    ];

    public function getJawaban()
    {
        return $this->belongsTo(Jawaban::class, 'jawaban_id', 'id');
    }
}
