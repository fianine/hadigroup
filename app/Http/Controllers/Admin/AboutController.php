<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\About\AboutInterface as AboutInterface;
use Auth;

class AboutController extends Controller
{
    private $aboutRepository;

    public function __construct(AboutInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
        $this->middleware('auth');
    }

    // About
    public function index_about(Request $request)
    {
      $type = 'about';
      $id = 1;

      if(!$request->about){
        $about = $this->aboutRepository->findById($id,$type);
        return view('admin/about/index', compact('about'));
      }else{
        $about = $this->aboutRepository->update($request,$id,$type);
        return redirect('admin/about');
      }
    }

    // Mission
    public function index_mission()
    {
      $type = 'mission';
      $mission = $this->aboutRepository->getData($type);
      return view('admin/about/mission/index', compact('mission'));
    }

    public function add_mission(Request $request)
    {
      if(!$request->mission){
        return view('admin/about/mission/add');
      }else{
        $mission = $this->aboutRepository->create($request);
        return redirect('admin/about/mission');
      }
    }

    public function edit_mission(Request $request, $id)
    {
      $type = 'mission';
      if(!$request->mission){
        $mission = $this->aboutRepository->findById($id,$type);
        return view('admin/about/mission/edit', compact('mission'));
      }else{
        $mission = $this->aboutRepository->update($request,$id);
        return redirect('admin/about/mission');
      }
    }

    public function delete_mission($id)
    {
      $mission = $this->aboutRepository->delete($id);
      return redirect('admin/about/mission');
    }
}
