<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
  protected $table = 'placements';

  protected $primaryKey = 'user_id';

  public $incrementing = false;

  public $timestamps = false;

  public function user(){
      return $this->belongsTo('App\Models\User', 'user_id');
  }
}
