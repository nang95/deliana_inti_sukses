<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bisnis;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class BisnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $bisnis = Bisnis::orderBy('id', 'DESC');

        if (!empty($q_judul)) {
            $bisnis->where('judul', 'LIKE', '%'.$q_judul.'%');
        }

        $bisnis = $bisnis->paginate(10);
        $skipped = ($bisnis->perPage() * $bisnis->currentPage()) - $bisnis->perPage();

        return view('apps.admin.bisnis.index')->with('bisnis', $bisnis)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bisnis $bisnis)
    {
        return view('apps.admin.bisnis.create');
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
            $gambar = $request->file('gambar')->store('bisnis');
            $data['gambar'] = $gambar;
        }

        Bisnis::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.bisnis');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bisnis $bisnis)
    {
        return view('apps.admin.bisnis.edit')->with('bisnis', $bisnis);
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
        $bisnis = Bisnis::findOrFail($request->id);
        $data = $request->all();

        if($request->file('gambar')){
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('bisnis');
            $data['gambar'] = $gambar;
        }

        $bisnis->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.bisnis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $bisnis = Bisnis::findOrFail($request->id);
        
        $bisnis->delete();
        return redirect()->back();
    }

    public function download(Bisnis $bisnis){
        return Storage::disk('public')->download($bisnis->gambar);
    }
}
