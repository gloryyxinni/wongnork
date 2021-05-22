<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Rating;
use App\Models\Comment;

class Reviews extends Model
{
    protected $fillable = [
        'User_id', 'Restaurant_id','Rating_Rating_id','Comment_Comment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'Restaurant_id');
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class, 'Rating_Rating_id');
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'Comment_Comment_id');
    }
}
