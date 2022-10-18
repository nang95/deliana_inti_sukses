<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Profil, Bisnis, Kontak};

class TentangKamiController extends Controller
{
    public function index(){
        $profil = Profil::first();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.tentang_kami')->with('profil', $profil)
                                             ->with('profil_footer', $profil_footer)
                                             ->with('bisnis_footer', $bisnis_footer)
                                             ->with('kontak_footer', $kontak_footer);
    }
}
