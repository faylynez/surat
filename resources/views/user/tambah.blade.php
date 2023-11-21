@extends('template.main')
@section('judul','Form Tambah Data Pengguna')
@section('user','active')
@section('konten')
<div class="product-card shadow">
    <form action="/user" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input value="{{old('name')}}"  name="name" type="text" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input value="{{old('email')}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input value="{{old('phone')}}" name="phone" type="number" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input value="{{old('password')}}" name="password" type="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/user">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
@endsection