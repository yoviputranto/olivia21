<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table        = 'pertanyaans';
    protected $fillable     = [
        'pertanyaan', 'slug', 'user_id', 'category_id'
    ];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getCategory()
    {
        return $this->belongsTo(ArticleCategory::class, 'category_id', 'id');
    }
}
