<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Company\CompanyInterface as CompanyInterface;
use Auth;

class CompanyController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyInterface $companyRepository)
    {
      $this->companyRepository = $companyRepository;
      $this->middleware('auth');
    }

    public function index()
    {
      $company = $this->companyRepository->get();
      return view('admin/company/index', compact('company'));
    }

    public function add(Request $request)
    {
      if(!$request->company_name){
        return view('admin/company/add');
      }else{
        $this->companyRepository->create($request);
        return redirect('admin/company');
      }
    }

    public function edit(Request $request, $id)
    {
      if(!$request->company_name){
        $company = $this->companyRepository->findById($id);
        return view('admin/company/edit', compact('company'));
      }else{
        $company = $this->companyRepository->update($id,$request);
        return redirect('admin/company');
      }
    }

    public function delete($id)
    {
      $delete = $this->companyRepository->delete($id);
      return redirect('admin/company');
    }
}
