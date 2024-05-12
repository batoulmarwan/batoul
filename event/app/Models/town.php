<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class town extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
            ];
    public function place(){
        return $this->hasMany(place::class,'town_id');
                  }
    public function event_town(){
        return $this->hasMany(event_town::class,'town_id');
}
}