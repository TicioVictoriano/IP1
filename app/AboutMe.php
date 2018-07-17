<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
protected $fillable = [
'aboutme',
'user_id'
];
// Table Name
protected $table = 'about_me';
// Primary Key
public $primaryKey = 'id';
// Timestamps
public $timestamps = true;
}
