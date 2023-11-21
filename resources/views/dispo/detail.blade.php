@extends('template.main')
@section('disposition','active')
@section('judul', 'Detail Data Surat Disposisi')
@section('konten')
<div class="product-card shadow">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <table class="table">
                <tr>
                    <th width="30%">No disposisi</th>
                    <td width="1%">:</td>
                    <td>{{$disposition->no_disposisi}}</td>
                </tr>
                <tr>
                    <th width="30%">No Surat</th>
                    <td width="1%">:</td>
                    <td>{{$disposition->no_surat}}</td>
                </tr>
                <tr>
                    <th width="30%">Kepada</th>
                    <td width="1%">:</td>
                    <td>{{$disposition->kepada}}</td>
                </tr>
            </table>
            <a href="/dispo" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
