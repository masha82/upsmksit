<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Prestasi;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'DESC')->paginate(5);
        $videos = Video::orderBy('created_at', 'DESC')->paginate(5);
        $prestasi = Prestasi::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('berita', 'videos', 'prestasi'));
    }
}
