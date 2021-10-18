<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabKomentar extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'jawab_komentars';
    protected $fillable     = [
        'jawab_komentar', 'komentar_id'
    ];

    public function getKomentar()
    {
        return $this->belongsTo(Komentar::class, 'komentar_id', 'id');
    }
}
