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
        $profil = Profil::orderBy('id', 'desc');

        if (!empty($q_judul)) {
            $profil->where('name', 'LIKE', '%'.$q_judul.'%');
        }

        $profil = $profil->paginate();
        $skipped = ($profil->perPage() * $profil->currentPage()) - $profil->perPage();

        return view('apps.admin.profil.index')->with('profil', $profil)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);
                                          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(profil $profil)
    {
        return view('apps.admin.profil.edit')->with('profil', $profil);
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
            Storage::delete(storage_path('app/'.$profil->gambar));
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('profil');
            $data['gambar'] = $gambar;
        }

        $profil->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $profil = Profil::findOrFail($request->id);
        
        $profil->delete();
        return redirect()->back();
    }

    public function download(profil $profil){
        return Storage::disk('public')->download($profil->gambar);
    }
}
