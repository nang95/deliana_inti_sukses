<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisi;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $visi_misi = VisiMisi::where('jenis', 'visi');

        if (!empty($q_judul)) {
            $visi_misi->where('deskripsi', 'LIKE', '%'.$q_judul.'%');
        }

        $visi_misi = $visi_misi->paginate(10);
        $skipped = ($visi_misi->perPage() * $visi_misi->currentPage()) - $visi_misi->perPage();

        return view('apps.admin.visi.index')->with('visi', $visi_misi)
                                             ->with('skipped', $skipped)
                                             ->with('q_judul', $q_judul);
                                          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(VisiMisi $visi_misi)
    {
        return view('apps.admin.visi.create');
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
        $data['jenis'] = 'visi';

        VisiMisi::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.visi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VisiMisi $visi_misi)
    {
        return view('apps.admin.visi.edit')->with('visi', $visi_misi);
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
        $visi_misi = VisiMisi::findOrFail($request->id);
        $data = $request->all();
        $data['type'] = 'visi';
        $visi_misi->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.visi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $visi_misi = VisiMisi::findOrFail($request->id);
        
        $visi_misi->delete();
        return redirect()->back();
    }
}
