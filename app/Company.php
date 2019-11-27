<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = [
      'company_name',
      'desc',
      'company_logo',
      'company_web_image',
      'created_at',
      'updated_at'
    ];
}
