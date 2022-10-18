<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Proyek, Profil, Bisnis, Kontak};

class ProyekController extends Controller
{
    public function index(){
        $proyek = Proyek::orderBy('id', 'desc')->get();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.proyek')->with('proyek', $proyek)
                                       ->with('profil_footer', $profil_footer)
                                       ->with('bisnis_footer', $bisnis_footer)
                                       ->with('kontak_footer', $kontak_footer);
    }

    public function detail(Proyek $proyek){
        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.detail_proyek')->with('proyek', $proyek)
                                              ->with('profil_footer', $profil_footer)
                                              ->with('bisnis_footer', $bisnis_footer)
                                              ->with('kontak_footer', $kontak_footer);
    }
}
