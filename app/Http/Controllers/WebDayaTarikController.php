<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Wisata;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebDayaTarikController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $wisatas = Wisata::latest()->paginate(E_ALL);
        $budayas = Budaya::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.daya-tarik', compact('wisatas','budayas'));
    }
}
