<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'date_event',
        'type_event_id',
        'budget_id',
         'user_id',
         'admin_id',
    ];  
  //  public $timestamps=false;
  public function type_event(){
    return $this->belongsTo(type_event::class);
  }
  public function budget(){
    return $this->belongsTo(budget::class);
  }
  public function place(){
    return $this->belongsTo(place::class);
  }
  public function user(){
    return $this->belongsTo(User::class);
  }
  public function admin(){
    return $this->belongsTo(admin::class);
  }
  public function event_servic(){
    return $this->hasMany(event_servic::class,'event_id');
  }
  
}
