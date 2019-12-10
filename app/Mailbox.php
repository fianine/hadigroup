<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailbox extends Model
{
  protected $fillable = [
    'name',
    'email',
    'phone',
    'subject',
    'message',
    'updated_at'
  ];
}
