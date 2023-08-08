<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebAkomodasiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $akomodasis = Akomodasi::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.akomodasi', compact('akomodasis'));
    }
}
