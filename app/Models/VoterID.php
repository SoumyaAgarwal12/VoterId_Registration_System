<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class VoterID extends Model
{
    use HasFactory, SoftDeletes;
    
    public function getDobAttribute($value){
        return date("m-d-y", strtotime($value));
    }
}
