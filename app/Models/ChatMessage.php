<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function sender(){
        return $this->belongsTo(User::class,'sender_id','id');
    }

     public function receiver(){
        return $this->belongsTo(User::class,'receiver_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'sender_id','id');
    }


}
