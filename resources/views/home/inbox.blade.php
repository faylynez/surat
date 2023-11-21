<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Laporan Data Surat Masuk</title>
  </head>
  <body>
    <h4>Laporan Data Surat Masuk <span class="text-primary">PT. RPL Corps</span></h4>
    <p style=" font-style:italic">
        {{Carbon\Carbon::create(now())->format('d F Y H:i:s')}}
    </p>
    <hr class="bg-dark" style="height: 2px">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <th>#</th>
            <th>No Agenda</th>
            <th>Jenis Surat</th>
            <th>Tgl Kirim</th> 
            <th>Tgl Terima</th> 
            <th>No Surat</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Status Disposisi</th>
        </thead>
        @foreach ($data as $x)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$x->no_agenda}}</td>
                <td>{{$x->jenis_surat}}</td>
                <td>{{Carbon\Carbon::create($x->tanggal_kirim)->format('d M y')}}</td>
                <td>{{Carbon\Carbon::create($x->tanggal_terima)->format('d M y')}}</td>
                <td>{{$x->no_surat}}</td>
                <td>{{$x->pengirim}}</td>
                <td>{{$x->perihal}}</td>            
                @if($x->relasi==0)                
                    <td> <span class="badge badge-danger">Belum di disposisikan</span></td>
                @else
                    <td> <span class="badge badge-success">Sudah di disposisikan</span></td>                
                @endif     
            </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="offset-9 text-center">
            Pekanbaru, {{Carbon\Carbon::create(now())->format('d F Y')}}
            <img style="width: 100px" src="data:image/png;base64, {{DNS2D::getBarcodePNG(Auth::user()->email, 'QRCODE')}} " alt="barcode"   />
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>