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
      if(!$request->content){
        $content = $this->contentRepository->findHeaderById(1);
        return view('admin/content/header/add', compact('content'));
      }else{
        $header = $this->contentRepository->updateContentHeader($request);
        return redirect('admin/content/header');
      }
    }

    public function add_socmed(Request $request)
    {
      if(!$request->email){
        $content = $this->contentRepository->findSocmedById(1);
        return view('admin/content/socmed/add', compact('content'));
      }else{
        $socmed = $this->contentRepository->updateContentSocmed($request);
        return redirect('admin/content/social-media');
      }
    }
}
