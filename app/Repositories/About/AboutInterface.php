<?php

namespace App\Repositories\About;

interface AboutInterface {
    public function findById($id,$type);
    public function getData($type);
    public function create($request);
    public function update($request,$id,$type);
    public function delete($id);
}
