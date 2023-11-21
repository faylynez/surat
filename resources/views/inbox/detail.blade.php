@extends('template.main')
@section('inbox','active')
@section('judul', 'Detail Data Surat Masuk')
@section('konten')
<div class="product-card shadow">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <table class="table">
                <tr>
                    <th width="30%">No Agenda</th>
                    <td width="1%">:</td>
                    <td>{{$inbox->no_agenda}}</td>
                </tr>
                <tr>
                    <th width="30%">Jenis Surat</th>
                    <td width="1%">:</td>
                    <td>{{$inbox->jenis_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Kirim</th>
                    <td width="1%">:</td>
                    <td>{{Carbon\Carbon::create($inbox->tanggal_kirim)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <th width="30%">Tanggal Terima</th>
                    <td width="1%">:</td>
                    <td>{{Carbon\Carbon::create($inbox->tanggal_terima)->format('d F Y')}}</td>
                </tr>
                <tr>
                    <th width="30%">No Surat</th>
                    <td width="1%">:</td>
                    <td>{{$inbox->no_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Pengirim</th>
                    <td width="1%">:</td>
                    <td>{{$inbox->pengirim}}</td>
                </tr>
                <tr>
                    <th width="30%">Perihal</th>
                    <td width="1%">:</td>
                    <td>{{$inbox->perihal}}</td>
                </tr>
            </table>
            <a href="/inbox" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
