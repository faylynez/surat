@extends('template.main')
@section('dispo','active')
@section('judul', 'Form Tambah Data Surat Disposisi')
@section('konten')
<div class="product-card shadow">
    <form action="/dispo/{{$disposition->id}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="">No Disposisi</label>
            <input value="{{$disposition->no_disposisi}}" name="no_disposition" type="text" class="form-control @error('no_disposition') is-invalid @enderror">
            @error('no_disposition')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Surat</label>
            <input value="{{$disposition->no_surat}}" name="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Kepada</label>
            <input value="{{$disposition->kepada}}" name="kepada" type="text" class="form-control @error('kepada') is-invalid @enderror">
            @error('kepada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a href="/dispo" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
</div>
@endsection
