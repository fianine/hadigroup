<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutMission extends Model
{
  protected $table = 'about_mission';

  protected $fillable = [
    'about_id',
    'mission',
    'created_at',
    'updated_at'
  ];
}
