<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socmed extends Model{

  protected $table = 'content_socmed';

  protected $fillable = [
    'email',
    'instagram',
    'facebook',
    'created_at',
    'updated_at'
  ];

}
