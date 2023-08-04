<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebVideoController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $videos = Video::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.video', compact('videos'));
    }
}
