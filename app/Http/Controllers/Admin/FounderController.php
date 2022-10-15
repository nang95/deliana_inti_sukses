<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Founder;
use Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q_judul = $request->q_judul;
        $founder = Founder::orderBy('id', 'DESC');

        if (!empty($q_judul)) {
            $founder->where('judul', 'LIKE', '%'.$q_judul.'%');
        }

        $founder = $founder->paginate(10);
        $skipped = ($founder->perPage() * $founder->currentPage()) - $founder->perPage();

        return view('apps.admin.founder.index')->with('founder', $founder)
                                              ->with('skipped', $skipped)
                                              ->with('q_judul', $q_judul);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Founder $founder)
    {
        return view('apps.admin.founder.create');
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
        
        if($request->file('logo')){
            $file= $request->file('logo'); 
            $filename= $file->getClientOriginalName();
            $logo = $request->file('logo')->store('klien');
            $data['logo'] = $logo;
        }

        Founder::create($data);

        Session::flash('flash_message', 'Data telah disimpan');
        return redirect()->route('admin.founder');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Founder $founder)
    {
        return view('apps.admin.founder.edit')->with('founder', $founder);
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
        $founder = Founder::findOrFail($request->id);
        $data = $request->all();

        if($request->file('logo')){
            $file= $request->file('logo'); 
            $filename= $file->getClientOriginalName();
            $logo = $request->file('logo')->store('klien');
            $data['logo'] = $logo;
        }

        $founder->update($data);
        Session::flash('flash_message', 'Data telah disimpan');
    
        return redirect()->route('admin.founder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $founder = Founder::findOrFail($request->id);
        
        $founder->delete();
        return redirect()->back();
    }

    public function download(Founder $founder){
        return Storage::disk('public')->download($founder->logo);
    }
}
