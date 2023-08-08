<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\View\View;
use Illuminate\Http\Request;

class WebSouvenirController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $souvenirs = Souvenir::latest()->paginate(E_ALL);

        //render view with posts
        return view('web.souvenir', compact('souvenirs'));
    }
}
