<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::latest()->get();
        return view('anggota.index',compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required',
            'nim'=>'required',
            'divisi'=>'required',
            'foto'=>'required|mimes:png,jpg,jpeg'         
        ]);

        $foto = $request->file('foto');
        $name = time().'.'.$foto->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $foto->move($destinationPath, $name);

        Anggota::create([
            'nim'=>$request->get('nim'),
            'nama'=>$request->get('nama'),
            'divisi'=>$request->get('divisi'),
            'foto'=>$name
        ]);
        return redirect()->back()->with('message', 'Anggota berhasil didaftarkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.detail', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit',compact(('anggota')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'nim'=>'required',
            'divisi'=>'required',
            'foto'=>'required'       
        ]);

        // $pengaduan = Pengaduan::find($id);
        // $pengaduan->update($request->all());

        $anggota = Anggota::find($id);
        $name = $anggota->foto;
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $name = time().'.'.$foto->getClientOriginalExtension();    
            $destinationPath = public_path('/image');
            $foto->move($destinationPath,$name);
        }
        
        $anggota->nama = $request->get('nama');
        $anggota->nim = $request->get('nim');
        $anggota->divisi = $request->get('divisi');
        $anggota->foto = $name;
        $anggota->save();

        return redirect()->back()->with('message', 'Anggota berhasil diupdate!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect()->back()->with('message','Anggota berhasil dihapus');
    }
}
