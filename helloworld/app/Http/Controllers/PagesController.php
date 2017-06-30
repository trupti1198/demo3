<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class PagesController extends Controller
{
    public function index()
    {
        $title='welcome to laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
     public function about()
    {
        $title='About Us';
        return view('pages.about')->with('title',$title);
    }
     public function services()
    {
        $data=array(
           'title'=>'services',
           'services'=>['Web Design','programming','seo']
        );
        return view('pages.services')->with($data);
    }
}
