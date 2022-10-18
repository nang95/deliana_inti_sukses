<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Profil, Bisnis, Kontak};

class KontakController extends Controller
{
    public function index(){
        $kontak = Kontak::first();
        
        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.kontak')->with('kontak', $kontak)
                                       ->with('profil_footer', $profil_footer)
                                       ->with('bisnis_footer', $bisnis_footer)
                                       ->with('kontak_footer', $kontak_footer);
    }
}
