<?php

namespace App\Repositories\Content;

interface ContentInterface {
    public function findById($id);
    public function updateContent($request);
}
