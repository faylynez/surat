@extends('template.main')
@section('judul','Form Ubah Data Pengguna')
@section('user','active')
@section('konten')
<div class="product-card shadow">
    <form action="/user/{{$user->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input value="{{$user->name}}"  name="name" type="text" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input value="{{$user->email}}" name="email" type="text" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input value="{{$user->phone}}" name="phone" type="number" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/user">Kembali</a>
            <button type="submit" class="btn btn-warning">Ubah Data</button>
        </div>
    </form>
</div>
@endsection