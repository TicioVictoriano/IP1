<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
  protected $fillable = [
  'placement',
  'user_id'
  ];
  // Table Name
  protected $table = 'placements';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
