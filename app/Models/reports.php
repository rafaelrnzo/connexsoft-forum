<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;

    protected $fillable = [
        
        "user_id",	
        "answer_id",	
        "comment_id",	
        "question_id",	
        "report_category_id",	
        "status"

    ];
}