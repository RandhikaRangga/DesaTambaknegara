<?php

namespace App\Http\Controllers;

use App\Models\Dokum;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebDokumController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $dokums = Dokum::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.dokumentasi', compact('dokums'));
    }
}
