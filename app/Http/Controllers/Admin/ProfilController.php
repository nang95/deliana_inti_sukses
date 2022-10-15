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
        $profil = Profil::first();

        if (empty($profil)) {
            $profil = Profil::create([
                'judul' => 'Judul...',
                'deskripsi' => 'Deskripsi...',
                'gambar' => null
            ]);
        }

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

        if($request->file('gambar')){
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('profil');
            $data['gambar'] = $gambar;
        }

        $profil->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.profil');
    }

    public function download(profil $profil){
        return Storage::disk('public')->download($profil->gambar);
    }
}
