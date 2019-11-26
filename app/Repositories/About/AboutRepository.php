<?php

namespace App\Repositories\About;

use App\Repositories\About\AboutInterface as AboutInterface;
use App\About;
use App\AboutMission;
use Validator;
use File;

class AboutRepository implements AboutInterface {

    protected $about;
    protected $mission;

    public function __construct(About $about, AboutMission $mission)
    {
        $this->about = $about;
        $this->mission = $mission;
    }

    public function getData($type)
    {
      if($type == 'about'){
        return $this->about->get();
      }else{
        return $this->mission->get();
      }
    }

    public function findById($id,$type)
    {
      if($type == 'about'){
        return $this->about->where('id', $id)->first();
      }else{
        return $this->mission->where('id', $id)->first();
      }
    }

    public function create($request)
    {
      $mission = AboutMission::create([
        'about_id' => 1,
        'mission' => $request->mission
      ]);
    }

    public function update($request,$id,$type)
    {
      if($type == 'about'){
        $about = About::find($id);
        $about->about = $request->about;
        $about->vission = $request->vission;
        $about->save();
      }else{
        $mission = AboutMission::find($id);
        $mission->mission = $request->mission;
        $mission->save();
      }
    }

    public function delete($id)
    {
      $delete = AboutMission::where('id', $id)->delete();
    }
}
