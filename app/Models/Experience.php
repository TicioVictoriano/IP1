<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  protected $fillable = [
  'experience',
  'user_id'
  ];
  // Table Name
  protected $table = 'experiences';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
