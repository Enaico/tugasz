<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
 
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('kelas.add', compact('siswa','guru','mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'siswa_id' => 'required',
            'guru_id' => 'required',
            'mapel_id' => 'required'
        ]);

        $kelas = Kelas::create($request->all());
        return redirect('kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        $k = Kelas::find($id);
        return view('kelas.edit', compact('k','siswa','guru','mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'siswa_id' => 'required',
            'guru_id' => 'required',
            'mapel_id' => 'required'
        ]);

        $kelas = Kelas::find($id);

        $kelas->update([
            'nama' => $request->nama,
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'mapel_id' => $request->mapel_id
        ]);
        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect('kelas');
    }
}
