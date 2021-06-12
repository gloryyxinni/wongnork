<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Reviews;

class Rating extends Model
{
    use HasFactory;
    

    public function review()
      {
          return $this->hasMany(Review::class);
      }
}
