@extends('template.main')
@section('send','active')
@section('judul', 'Detail Data Surat Keluar')
@section('konten')
<div class="product-card shadow">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <table class="table">
                <tr>
                    <th width="30%">No Agenda</th>
                    <td width="1%">:</td>
                    <td>{{$send->no_agenda}}</td>
                </tr>
                <tr>
                    <th width="30%">Jenis Surat</th>
                    <td width="1%">:</td>
                    <td>{{$send->jenis_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Kirim</th>
                    <td width="1%">:</td>
                    <td>{{Carbon\Carbon::create($send->tanggal_kirim)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <th width="30%">No Surat</th>
                    <td width="1%">:</td>
                    <td>{{$send->no_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Pengirim</th>
                    <td width="1%">:</td>
                    <td>{{$send->pengirim}}</td>
                </tr>
                <tr>
                    <th width="30%">Perihal</th>
                    <td width="1%">:</td>
                    <td>{{$send->perihal}}</td>
                </tr>
            </table>
            <a href="/send" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
