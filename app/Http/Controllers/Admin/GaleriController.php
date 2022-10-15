<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $galeri = Galeri::orderBy('id', 'DESC');

        if (!empty($q_judul)) {
            $galeri->where('judul', 'LIKE', '%'.$q_judul.'%');
        }

        $galeri = $galeri->paginate(10);
        $skipped = ($galeri->perPage() * $galeri->currentPage()) - $galeri->perPage();

        return view('apps.admin.galeri.index')->with('galeri', $galeri)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Galeri $galeri)
    {
        return view('apps.admin.galeri.create');
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
            $foto = $request->file('foto')->store('foto');
            $data['foto'] = $foto;
        }

        Galeri::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $galeri = Galeri::findOrFail($request->id);
        
        $galeri->delete();
        return redirect()->back();
    }

    public function download(Galeri $galeri){
        return Storage::disk('public')->download($galeri->galeri);
    }
}
