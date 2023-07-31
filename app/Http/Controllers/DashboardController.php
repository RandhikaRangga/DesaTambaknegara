<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\Budaya;
use App\Models\Kuliner;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wisata = wisata::count();
        $budaya = budaya::count();
        $kuliner = kuliner::count();

        return view('admin.dashboard', compact('wisata','budaya','kuliner'));
    }
}
