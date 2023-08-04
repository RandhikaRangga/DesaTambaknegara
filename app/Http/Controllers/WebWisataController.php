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
        $kuliners = Kuliner::latest()->paginate(E_ALL);
        $wisatas = Wisata::latest()->paginate(E_ALL);
        $budayas = Budaya::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.wisata', compact('kuliners','budayas','wisatas'));
    }
}
