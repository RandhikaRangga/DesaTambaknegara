<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebKulinerController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $kuliners = Kuliner::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.kuliner', compact('kuliners'));
    }
}
