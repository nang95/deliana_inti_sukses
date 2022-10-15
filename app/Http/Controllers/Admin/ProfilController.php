<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $profil = Profil::first();

        return view('apps.admin.profil.index')->with('profil', $profil);                        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profil = Profil::findOrFail($request->id);
        $data = $request->all();

        if($request->file('foto')){
            $file= $request->file('foto'); 
            $filename= $file->getClientOriginalName();
            $foto = $request->file('foto')->store('profil');
            $data['foto'] = $foto;
        }

        $profil->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.profil');
    }

    public function download(profil $profil){
        return Storage::disk('public')->download($profil->gambar);
    }
}
