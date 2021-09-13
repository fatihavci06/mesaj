<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    public function senderinfo(){
      return  $this->hasOne(User::class, 'id', 'sender_id');
    }
}
