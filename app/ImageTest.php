<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageTest extends Model
{
  protected $table = 'image_test';

  protected $fillable = [
    'filename',
    'created_at',
    'updated_at'
  ];
}
