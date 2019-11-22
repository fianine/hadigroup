<?php

namespace App\Repositories\Content;

use App\Repositories\Content\ContentInterface as ContentInterface;
use App\Header;
use App\Socmed;
use Validator;
use File;

class ContentRepository implements ContentInterface {

    protected $header;
    protected $socmed;

    public function __construct(Header $header, Socmed $socmed)
    {
        $this->header = $header;
        $this->socmed = $socmed;
    }

    // Header
    public function findHeaderById($id)
    {
        return $this->header->find($id);
    }

    public function updateContentHeader($request)
    {
      $validator = Validator::make($request->all(), [
       'file' => 'max:100000',
      ]);

      if ($validator->fails()) {
        return $validator->errors();
      }

      $header = Header::find(1);

      if($request->hasFile('file')) {
        $image = $request->file('file');
        $filename = time().'.'.$image->guessExtension();
        $path = $request->file('file')->move(base_path() . '/public/upload/content/', $filename);

        $header->content = $request->content;
        $header->image = $filename;
      }else{
        $header->content = $request->content;
      }

      $header->save();
    }

    // Social Media
    public function findSocmedById($id)
    {
        return $this->socmed->find($id);
    }

    public function updateContentSocmed($request)
    {
        $socmed = Socmed::find(1);

        $socmed->email = $request->email;
        $socmed->instagram = $request->instagram;
        $socmed->facebook = $request->facebook;

        $socmed->save();
    }
}
