<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $kontak = Kontak::first();

        return view('apps.admin.kontak.index')->with('kontak', $kontak)
                                              ->with('q_judul', $q_judul);                    
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
        $kontak = Kontak::findOrFail($request->id);
        $data = $request->all();

        $kontak->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.kontak');
    }
}
