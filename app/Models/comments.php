<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        
        "content",	
        "question_id",	
        "answer_id",	
        "comment_id",	
        "user_id"

    ];
}