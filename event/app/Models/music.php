<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_music',
        'performence_id',
    ];
    public function servic(){
        return $this->hasMany(servic::class,'music_id');
      }
      public function performence(){
        return $this->belongsTo(performence::class);
      }
}
