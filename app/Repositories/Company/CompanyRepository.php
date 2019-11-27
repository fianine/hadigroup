<?php

namespace App\Repositories\Company;

use App\Repositories\Company\CompanyInterface as CompanyInterface;
use App\Company;
use Validator;
use File;

class CompanyRepository implements CompanyInterface {

    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function get()
    {
      return $this->company->get();
    }

    public function findById($id)
    {
      return $this->company->find($id);
    }

    public function create($request)
    {
        $validator = Validator::make($request->all(), [
         'file_logo' => 'max:100000',
         'file_web' => 'max:100000',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $company = new Company;

        $fileLogo = $request->file('file_logo');
        $filenameLogo = time().'.'.$fileLogo->guessExtension();
        $pathLogo = $request->file('file_logo')->move(base_path() . '/public/upload/company/logo/', $filenameLogo);

        $fileWeb = $request->file('file_web');
        $filenameWeb = time().'.'.$fileWeb->guessExtension();
        $pathWeb = $request->file('file_web')->move(base_path() . '/public/upload/company/web/', $filenameWeb);

        $company->company_name = $request->company_name;
        $company->desc = $request->desc;
        $company->company_logo = $filenameLogo;
        $company->company_web_image = $filenameWeb;
        $company->company_link = $request->company_link;

        $company->save();
    }

    public function update($id,$request)
    {
        $validator = Validator::make($request->all(), [
         'file_logo' => 'max:100000',
         'file_web' => 'max:100000',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $company = Company::find($id);

        if($request->file_logo && $request->file_Web){
          $fileLogo = $request->file('file_logo');
          $filenameLogo = time().'.'.$fileLogo->guessExtension();
          $deleteImageLogo = unlink(base_path() . '/public/upload/company/logo/' . $company->company_logo);
          $pathLogo = $request->file('file_logo')->move(base_path() . '/public/upload/company/logo/', $filenameLogo);

          $fileWeb = $request->file('file_web');
          $filenameWeb = time().'.'.$fileWeb->guessExtension();
          $deleteImageWeb = unlink(base_path() . '/public/upload/company/web/' . $company->company_web_image);
          $pathWeb = $request->file('file_web')->move(base_path() . '/public/upload/company/web/', $filenameWeb);

          $company->company_name = $request->company_name;
          $company->desc = $request->desc;
          $company->company_logo = $filenameLogo;
          $company->company_web_image = $filenameWeb;
          $company->company_link = $request->company_link;
        }elseif($request->file_logo && !$request->file_Web){
          $fileLogo = $request->file('file_logo');
          $filenameLogo = time().'.'.$fileLogo->guessExtension();
          $deleteImageLogo = unlink(base_path() . '/public/upload/company/logo/' . $company->company_logo);
          $pathLogo = $request->file('file_logo')->move(base_path() . '/public/upload/company/logo/', $filenameLogo);

          $company->company_name = $request->company_name;
          $company->desc = $request->desc;
          $company->company_logo = $filenameLogo;
          $company->company_link = $request->company_link;
        }elseif(!$request->file_logo && $request->file_Web){
          $fileWeb = $request->file('file_web');
          $filenameWeb = time().'.'.$fileWeb->guessExtension();
          $deleteImageWeb = unlink(base_path() . '/public/upload/company/web/' . $company->company_web_image);
          $pathWeb = $request->file('file_web')->move(base_path() . '/public/upload/company/web/', $filenameWeb);

          $company->company_name = $request->company_name;
          $company->desc = $request->desc;
          $company->company_web_image = $filenameWeb;
          $company->company_link = $request->company_link;
        }else{
          $company->company_name = $request->company_name;
          $company->desc = $request->desc;
          $company->company_link = $request->company_link;
        }

        $company->save();

    }

    public function delete($id)
    {
        $company = Company::find($id);
        $deleteLogo = unlink(base_path() . '/public/upload/company/logo/' . $company->company_logo);
        $deleteWebImage = unlink(base_path() . '/public/upload/company/web/' . $company->company_web_image);
        $company->delete();
    }

}
