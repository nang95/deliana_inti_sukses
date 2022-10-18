<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Galeri, Profil, Bisnis, Kontak};

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::orderBy('id', 'desc')->get();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.galeri')->with('galeri', $galeri)
                                       ->with('profil_footer', $profil_footer)
                                       ->with('bisnis_footer', $bisnis_footer)
                                       ->with('kontak_footer', $kontak_footer);
    }
}
