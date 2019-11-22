<?php

namespace App\Repositories\Content;

use App\Repositories\Content\ContentInterface as ContentInterface;
use App\Header;
use Validator;
use File;

class ContentRepository implements ContentInterface {

    protected $header;

    public function __construct(Header $header)
    {
        $this->header = $header;
    }

    public function findById($id)
    {
        return $this->header->find($id);
    }

    public function updateContent($request)
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
}
