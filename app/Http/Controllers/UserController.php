<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->cari)
        {
            $cari=$request->cari;
            $data=User::where('name','like',"%".$cari."%")->orwhere('email','like',"%".$cari."%")->paginate(2);
        }else{
            $data= User::orderBy('name')->paginate(2);
        }
        $data->appends($request->all());
        return view('user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
        ]);
        $data=$request->all();
        $data["password"]=Hash::make($request->password);
        User::create($data);
        return redirect('/user')->with('sukses', 'Data berhasil disimpan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $dlama=User::findOrfail($user->id);
        $dbaru=$request->all();
        $dlama->update($dbaru);
        return redirect('/user')->with('sukses', 'Data berhasil diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile(){
        return view('user.editprofil');
    }

    public function editprofile(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'foto'=>'nullable',
        ]);

        
        $dl = User::findOrfail(Auth::User()->id);
        $db = $request->all();
        // dd($db);
        if($request->foto != ''){
            $db['foto']=$request->foto->store('user/profile', 'public');
            $dl->update($db);
        }
        $dl -> update($db);
        return redirect('/user')->with('sukses', 'Data berhasil disimpan!!');
    }
}
