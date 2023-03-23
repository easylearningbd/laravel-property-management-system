<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyMessage extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }

     public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }


}
