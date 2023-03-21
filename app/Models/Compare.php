<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compare extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function property(){
        return $this->belongsTo(Property::class,'property_id','id');
    }

    
}
