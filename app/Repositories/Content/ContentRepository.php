<?php

namespace App\Repositories\Content;

use App\Repositories\Content\ContentInterface as ContentInterface;
use App\Header;

class ContentRepository implements ContentInterface{

    protected $header;

    public function __construct(Header $header)
    {
        $this->header = $header;
    }

    public function findById($id)
    {
        return $this->header->find($id);
    }
}
