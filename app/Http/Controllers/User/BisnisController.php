<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Proyek, Profil, Bisnis, Kontak};

class BisnisController extends Controller
{
    public function index(){
        $bisnis = Bisnis::orderBy('id', 'desc')->get();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.bisnis')->with('profil_footer', $profil_footer)
                                       ->with('bisnis_footer', $bisnis_footer)
                                       ->with('kontak_footer', $kontak_footer)
                                       ->with('bisnis', $bisnis);
    }

    public function detail(Bisnis $bisnis){
        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.detail_bisnis')->with('profil_footer', $profil_footer)
                                              ->with('bisnis_footer', $bisnis_footer)
                                              ->with('kontak_footer', $kontak_footer)
                                              ->with('bisnis', $bisnis);
    }
}
