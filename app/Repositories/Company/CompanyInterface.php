<?php

namespace App\Repositories\Company;

interface CompanyInterface {
    public function get();
    public function findById($id);
    public function create($request);
    public function update($id,$request);
    public function delete($id);
}
