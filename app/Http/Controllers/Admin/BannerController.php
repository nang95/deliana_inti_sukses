<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $banner = Banner::orderBy('id', 'desc');

        if (!empty($q_judul)) {
            $banner->where('name', 'LIKE', '%'.$q_judul.'%');
        }

        $banner = $banner->paginate();
        $skipped = ($banner->perPage() * $banner->currentPage()) - $banner->perPage();

        return view('apps.admin.banner.index')->with('banner', $banner)
                                        ->with('skipped', $skipped)
                                        ->with('q_judul', $q_judul);
                                          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('apps.admin.banner.edit')->with('banner', $banner);
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
        $banner = Banner::findOrFail($request->id);
        $data = $request->all();

        if($request->file('gambar')){
            Storage::delete(storage_path('app/'.$banner->gambar));
            $file= $request->file('gambar'); 
            $filename= $file->getClientOriginalName();
            $gambar = $request->file('gambar')->store('banner');
            $data['gambar'] = $gambar;
        }

        $banner->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $banner = Banner::findOrFail($request->id);
        
        $banner->delete();
        return redirect()->back();
    }

    public function download(Banner $banner){
        return Storage::disk('public')->download($banner->gambar);
    }
}
