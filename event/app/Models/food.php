<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillable = [
        'classify_id',
    ];
    public function servic(){
        return $this->hasMany(servic::class,'food_id');
      }
      public function classifies(){
        return $this->belongsTo(classify::class);
      }
}
