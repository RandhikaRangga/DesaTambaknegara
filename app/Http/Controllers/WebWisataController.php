<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use App\Models\Budaya;
use App\Models\Wisata;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebWisataController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $kuliners = Kuliner::latest()->paginate(5);
        $wisatas = Wisata::latest()->paginate(5);
        $budayas = Budaya::latest()->paginate(5);

        //render view with posts
        return view('web.wisata', compact('kuliners','budayas','wisatas'));
    }
}
