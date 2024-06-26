<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[
        'id_user',
        'id_content',
        'id_parent',
        'detail_question',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function content()
    {
        return $this->belongsTo(ContentCourse::class, 'id_content');
    }
    public function replies()
    {
        return $this->hasMany(Question::class, 'id_parent')->with('replies');
    }
}
