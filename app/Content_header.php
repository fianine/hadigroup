<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content_header extends Model
{
  protected $fillable = [
    'content',
    'image',
    'created_at',
    'updated_at'
  ];
}
