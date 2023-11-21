@extends('template.main')
@section('send','active')
@section('judul', 'Form Tambah Data Surat Keluar')
@section('konten')
<div class="product-card shadow">
    <form action="/send" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">No Agenda</label>
            <input value="{{old('no_agenda')}}" name="no_agenda" type="text" class="form-control @error('no_agenda') is-invalid @enderror">
            @error('no_agenda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Jenis Surat</label>
            <input value="{{old('jenis_surat')}}" name="jenis_surat" type="text" class="form-control @error('jenis_surat') is-invalid @enderror">
            @error('jenis_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tanggal Kirim</label>
            <input value="{{old('tanggal_kirim')}}" name="tanggal_kirim" type="date" class="form-control @error('tanggal_kirim') is-invalid @enderror">
            @error('tanggal_kirim')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Surat</label>
            <input value="{{old('no_surat')}}" name="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Pengirim</label>
            <input value="{{old('pengirim')}}" name="pengirim" type="text" class="form-control @error('pengirim') is-invalid @enderror">
            @error('pengirim')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Perihal</label>
            <input value="{{old('perihal')}}" name="perihal" type="text" class="form-control @error('perihal') is-invalid @enderror">
            @error('perihal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a href="/send" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
@endsection
