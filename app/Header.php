<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Header extends Model{
  use SoftDeletes;

  protected $table = 'content_header';

  protected $fillable = [
    'content',
    'image',
    'created_at',
    'updated_at'
  ];

}
