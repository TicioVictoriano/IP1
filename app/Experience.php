<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  protected $fillable = [
  'experiences',
  'user_id'
  ];
  // Table Name
  protected $table = 'experiences';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
