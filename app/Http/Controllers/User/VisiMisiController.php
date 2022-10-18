<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{VisiMisi, Profil, Bisnis, Kontak};
class VisiMisiController extends Controller
{
    public function index(){
        $visi = VisiMisi::where('jenis', 'visi')->get();
        $misi = VisiMisi::where('jenis', 'misi')->get();

        // footer
        $profil_footer = Profil::first();
        $bisnis_footer = Bisnis::limit(8)->get();
        $kontak_footer = Kontak::first();

        return view('apps.user.visi_misi')->with('visi', $visi)
                                          ->with('misi', $misi)
                                          ->with('profil_footer', $profil_footer)
                                          ->with('bisnis_footer', $bisnis_footer)
                                          ->with('kontak_footer', $kontak_footer);
    }
}
