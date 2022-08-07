<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responds extends Model
{
    use HasFactory;

    protected $fillable = [
        
        "moderator_id",	
        "report_id",	
        "message",	
        "action"

    ];
}