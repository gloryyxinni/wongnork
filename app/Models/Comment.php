<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Reviews;

class Comment extends Model
{

    protected $fillable = [
    'Detail','Recommend_menu'
    ];

    public function review()
      {
          return $this->hasMany(Review::class);
      }
}
