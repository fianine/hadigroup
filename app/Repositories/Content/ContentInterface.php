<?php

namespace App\Repositories\Content;

interface ContentInterface {
    // Header
    public function findHeaderById($id);
    public function updateContentHeader($request);

    // Social Media
    public function findSocmedById($id);
    public function updateContentSocmed($request);
}
