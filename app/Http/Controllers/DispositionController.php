<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use App\Models\Inbox;
use Illuminate\Http\Request;

class DispositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->cari)
        {
            $cari=$request->cari;
            $data=Disposition::where('no_disposisi','like',"%".$cari."%")->orwhere('no_surat','like',"%".$cari."%")->paginate(2);
        }else{
            $data= Disposition::orderBy('no_disposisi')->paginate(2);
        }
        $data->appends($request->all());
        return view('dispo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inbox = Inbox::all();
        return view('dispo.tambah', compact('inbox'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_disposisi'=>'required',
            'no_agenda'=>'required',
            'no_surat'=>'required',
            'kepada'=>'required',
            'status_surat'=>'required',
            'tanggapan'=>'required',
            'id_suratmasuk'=>'required',
        ]);
$data=$request->all();
$data['id_user']=1;
Disposition::create($data);
return redirect('/dispo')->with('sukses', 'Data Berhasil Disimpan!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Disposition $disposition)
    {
        return view('dispo.detail', compact('disposition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disposition $disposition)
    {
        return view('dispo.ubah', compact('disposition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disposition $disposition)
    {
        $request->validate([
            'no_disposition'=>'required',
            'no_surat'=>'required',
            'kepada'=>'required',
        ]);
        $dl=Disposition::findOrFail($disposition->id);
        $db=$request->all();
        $dl->update($db);
        return redirect('/dispo')->with('sukses','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disposition $disposition)
    {
        Disposition::destroy($disposition->id);
        return redirect('/dispo')->with('sukses','Data Berhasil Dihapus!');
    }
}
