<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome to Trent's App!!!";
      return view('pages.index')->with('title', $title);
    }

    public function about() {
      return view('pages.about');
    }

    public function services() {
        $data = array(
                'title' => 'Services',
                'services' => ['Programming', 'Web Development', 'Design']
        );
        return view('pages.services')->with($data);
    }
}
