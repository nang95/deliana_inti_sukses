<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Klien;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $klien = Klien::orderBy('id', 'DESC');

        if (!empty($q_judul)) {
            $klien->where('judul', 'LIKE', '%'.$q_judul.'%');
        }

        $klien = $klien->paginate(10);
        $skipped = ($klien->perPage() * $klien->currentPage()) - $klien->perPage();

        return view('apps.admin.klien.index')->with('klien', $klien)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Klien $klien)
    {
        return view('apps.admin.klien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $data = $request->all();
        
        if($request->file('foto')){
            $file= $request->file('foto'); 
            $filename= $file->getClientOriginalName();
            $foto = $request->file('foto')->store('banner');
            $data['foto'] = $foto;
        }

        Klien::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.klien');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Klien $klien)
    {
        return view('apps.admin.klien.edit')->with('klien', $klien);
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
        $klien = Klien::findOrFail($request->id);
        $data = $request->all();

        if($request->file('foto')){
            $file= $request->file('foto'); 
            $filename= $file->getClientOriginalName();
            $foto = $request->file('foto')->store('klien');
            $data['foto'] = $foto;
        }

        $klien->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.klien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $klien = Klien::findOrFail($request->id);
        
        $klien->delete();
        return redirect()->back();
    }

    public function download(Klien $klien){
        return Storage::disk('public')->download($klien->foto);
    }
}
