<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Content\ContentInterface as ContentInterface;
use Auth;

class ContentController extends Controller
{
    private $contentRepository;

    public function __construct(ContentInterface $contentRepository)
    {
        $this->contentRepository = $contentRepository;
        $this->middleware('auth');
    }

    // Header
    public function add_header(Request $request)
    {
      $type = 'header';

      if(!$request->content){
        $content = $this->contentRepository->findById(1,$type);
        return view('admin/content/header/add', compact('content'));
      }else{
        $header = $this->contentRepository->updateContent($request,$type);
        return redirect('admin/content/header');
      }
    }

    // Social Media
    public function add_socmed(Request $request)
    {
      $type = 'socmed';

      if(!$request->email){
        $content = $this->contentRepository->findById(1,$type);
        return view('admin/content/socmed/add', compact('content'));
      }else{
        $socmed = $this->contentRepository->updateContent($request,$type);
        return redirect('admin/content/social-media');
      }
    }
}
