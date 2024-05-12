<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class performence extends Model
{
    use HasFactory;
    protected $fillable = [
        'performence_type',
        'price_per',
    ];  
    public function music(){
        return $this->hasMany(music::class,'performence_id');
      }
    
}
