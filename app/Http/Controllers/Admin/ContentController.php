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
        $content = $this->contentRepository->findById(1);
        return view('admin/content/header/add', compact('content'));
      }else{
        $header = $this->contentRepository->updateContent($request);
        return redirect('admin/content/header');
      }
    }
}
