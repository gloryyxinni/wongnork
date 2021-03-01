<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'User_id', 'Restaurant_id','Rating_Rating_id','Comment_Comment_id'
    ];
}
