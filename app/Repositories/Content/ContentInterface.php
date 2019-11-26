<?php

namespace App\Repositories\Content;

interface ContentInterface {
    // One Function
    public function findById($id,$type);
    public function updateContent($request,$type);
}
