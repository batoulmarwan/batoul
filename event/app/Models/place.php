<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'area',
        'price',
        'town_id',
            ];
    public function event(){
    return $this->hasMany(event::class,'place_id');
              }
              public function town(){
                return $this->belongsTo(town::class);
              }
}
