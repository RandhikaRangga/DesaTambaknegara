<?php

namespace App\Http\Controllers;
use App\Models\Wisata;
use App\Models\Budaya;
use App\Models\Kuliner;
use App\Models\Dokum;
use App\Models\Video;
use App\Models\Akomodasi;
use App\Models\Souvenir;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $wisata = wisata::count();
        $budaya = budaya::count();
        $kuliner = kuliner::count();
        $foto = dokum::count();
        $video = video::count();
        $akomodasi = Akomodasi::count();
        $souvenir = Souvenir::count();

        return view('admin.dashboard', compact('wisata','budaya','kuliner','foto','video','akomodasi','souvenir'));
    }
}
