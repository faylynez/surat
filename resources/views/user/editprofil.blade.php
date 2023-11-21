@extends('template.main')
@section('judul','Form Ubah Data Profile')
@section('profile','active')
@section('konten')
<div class="product-card shadow">
    <form action="/profile" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input value="{{Auth::user()->name}}"  name="name" type="text" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input value="{{Auth::user()->email}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input value="{{Auth::user()->phone}}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Foto</label>
            <input value="{{Auth::user()->foto}}" name="foto" type="file" accept="image/*" class="form-control @error('foto') is-invalid @enderror">
            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/profile">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection