<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is the index page';
        return view('pages.index')->with('title',$title);
        //return view('pages.index', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services'=>['web design','Programing','SEO']
        );
        return view('pages.services')->with($data);
    }

}
