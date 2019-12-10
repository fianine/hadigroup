<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
  protected $fillable = [
    'email',
    'instagram',
    'facebook',
    'created_at',
    'updated_at'
  ];
}
