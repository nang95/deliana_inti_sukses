<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyek;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $proyek = Proyek::orderBy('id', 'DESC');

        if (!empty($q_judul)) {
            $proyek->where('judul', 'LIKE', '%'.$q_judul.'%');
        }

        $proyek = $proyek->paginate(10);
        $skipped = ($proyek->perPage() * $proyek->currentPage()) - $proyek->perPage();

        return view('apps.admin.proyek.index')->with('proyek', $proyek)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Proyek $proyek)
    {
        return view('apps.admin.proyek.create');
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
        
        if($request->file('gambar')){
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('proyek');
            $data['gambar'] = $gambar;
        }

        Proyek::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.proyek');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        return view('apps.admin.proyek.edit')->with('proyek', $proyek);
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
        $proyek = Proyek::findOrFail($request->id);
        $data = $request->all();

        if($request->file('gambar')){
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('proyek');
            $data['gambar'] = $gambar;
        }

        $proyek->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.proyek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $proyek = Proyek::findOrFail($request->id);
        
        $proyek->delete();
        return redirect()->back();
    }

    public function download(Proyek $proyek){
        return Storage::disk('public')->download($proyek->gambar);
    }
}
