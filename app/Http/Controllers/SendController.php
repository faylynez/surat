<?php

namespace App\Http\Controllers;

use App\Models\Send;
use Illuminate\Http\Request;

class SendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->cari)
        {
            $cari=$request->cari;
            $data=Send::where('no_agenda','like',"%".$cari."%")->orwhere('jenis_surat','like',"%".$cari."%")->paginate(2);
        }else{
            $data= Send::orderBy('no_agenda')->paginate(2);
        }
        $data->appends($request->all());
        return view('send.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('send.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_agenda'=>'required',
            'jenis_surat'=>'required',
            'tanggal_kirim'=>'required',
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required',
        ]);
        $data=$request->all();
        $data['id_user']=1;
        Send::create($data);
        return redirect('/send')->with('sukses','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Send $send)
    {
        return view('send.detail', compact('send'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Send $send)
    {
        return view('send.ubah', compact('send'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Send $send)
    {
        $request->validate([
            'no_agenda'=>'required',
            'jenis_surat'=>'required',
            'tanggal_kirim'=>'required',
            'no_surat'=>'required',
            'pengirim'=>'required',
            'perihal'=>'required',
        ]);
        $dl=Send::findOrFail($send->id);
        $db=$request->all();
        $dl->update($db);
        return redirect('/send')->with('sukses','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Send $send)
    {
        Send::destroy($send->id);
        return redirect('/send')->with('sukses','Data Berhasil Dihapus!');
    }
}
