<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Banner, Profil, Founder, Galeri, Proyek, Bisnis, Klien, Kontak};
class HomeController extends Controller
{
    public function index(){
        $banner = Banner::first();
        $profil = Profil::first();
        $founder = Founder::limit(4)->get();
        $galeri = Galeri::limit(6)->get();
        $proyek = Proyek::limit(8)->get();
        $bisnis = Bisnis::limit(8)->get();
        $klien = Klien::get();
        $kontak = Kontak::first();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();
        
        return view('apps.user.home')->with('banner', $banner)
                                     ->with('profil', $profil)
                                     ->with('galeri', $galeri)
                                     ->with('proyek', $proyek)
                                     ->with('founder', $founder)
                                     ->with('bisnis', $bisnis)
                                     ->with('klien', $klien)
                                     ->with('kontak', $kontak)
                                     ->with('profil_footer', $profil_footer)
                                     ->with('bisnis_footer', $bisnis_footer)
                                     ->with('kontak_footer', $kontak_footer);
    }
}
