@extends('template.main')
@section('dispo','active')
@section('judul', 'Form Tambah Data Surat Disposisi')
@section('konten')
<div class="product-card shadow">
    <form action="/dispo" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Pilih Inbox</label>
            <select name="id_suratmasuk" id="" class="form-control @error('id_suratmasuk') is-invalid @enderror">
                <option value="">--Pilih Inbox--</option>
                @foreach ($inbox as $x)
                <option value="{{$x->id}}">{{$x->id}}</option>
                @endforeach
            </select>
            @error('id_suratmasuk')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Disposisi</label>
            <input value="{{old('no_disposisi')}}" name="no_disposisi" type="text" class="form-control @error('no_disposisi') is-invalid @enderror">
            @error('no_disposisi')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
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
            <label for="">No Surat</label>
            <input value="{{old('no_surat')}}" name="no_surat" type="text" class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Kepada</label>
            <input value="{{old('kepada')}}" name="kepada" type="text" class="form-control @error('kepada') is-invalid @enderror">
            @error('kepada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Status Surat</label>
            <select name="status_surat" id="" class="form-control @error('status_surat') is-invalid @enderror">
                <option value="">--Pilih Status Surat--</option>
                <option value="dipertimbangkan">Dipertimbangkan</option>
                <option value="ditindaklanjuti">Ditindaklanjuti</option>
                <option value="diarsipkan">Diarsipkan</option>
            </select>
            @error('status_surat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tanggapan</label>
            <input value="{{old('tanggapan')}}" name="tanggapan" type="text" class="form-control @error('tanggapan') is-invalid @enderror">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a href="/dispo" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
@endsection
