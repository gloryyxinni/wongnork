<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Reviews;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'location' ,'open_close_time','picture','phonenumber'
      ];


      public function review()
      {
          return $this->hasMany(Review::class);
      }
}
