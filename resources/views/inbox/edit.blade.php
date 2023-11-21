@extends('template.main')
@section('judul','Form Edit Data Surat Masuk')
@section('inbox','active')
@section('konten')
<div class="product-card shadow">
  <form action="/inbox/{{ $inbox->id }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="">No Agenda</label>
        <input value="{{ $inbox->no_agenda }}" name="no_agenda" type="text" class="form-control @error('no_agenda') is-invalid @enderror">
        @error('no_agenda')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Jenis Surat</label>
        <input value="{{ $inbox->jenis_surat }}" name="jenis_surat" type="text" class="form-control @error('jenis_surat') is-invalid @enderror">
        @error('jenis_surat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Tanggal Kirim</label>
        <input value="{{ $inbox->tanggal_kirim }}" name="tanggal_kirim" type="date" class="form-control @error('tanggal_kirim') is-invalid @enderror">
        @error('tanggal_kirim')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Tanggal Terima</label>
        <input value="{{ $inbox->tanggal_terima }}" name="tanggal_terima" type="date" class="form-control @error('tanggal_terima') is-invalid @enderror">
        @error('tanggal_terima')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">No Surat</label>
        <input value="{{ $inbox->no_surat }}" name="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror">
        @error('no_surat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Pengirim</label>
        <input value="{{ $inbox->pengirim }}" name="pengirim" type="text" class="form-control @error('pengirim') is-invalid @enderror">
        @error('pengirim')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Perihal</label>
        <input value="{{ $inbox->perihal }}" name="perihal" type="text" class="form-control @error('perihal') is-invalid @enderror">
        @error('perihal')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <a class="btn btn-secondary" href="/inbox">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
  </form>
</div>
@endsection