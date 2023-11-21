@extends('template.main')
@section('judul','Data Pengguna')
@section('user','active')
@section('konten')
<div class="product-card shadow">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
    @endif
    <a class="btn btn-primary mb-3 mt-3" href="/user/create">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-plus-square" viewBox="0 0 16 16">
            <path
                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        Tambah Data
    </a>
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" name="cari" class="form-control" placeholder="Search" >
            <button class="btn btn-outline-primary" type="submit">Search</button>
            <a href="/user" class="btn btn-danger">Clear</a>
          </div>          
    </form>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Foto</th>
            <th >Aksi</th>
        </thead>
        <tbody>
            @foreach ($data as  $x)
            <tr>
                <td >{{$loop->iteration}}</td>
                <td >{{$x->name}}</td>
                <td >{{$x->email}}</td>
                <td >{{$x->phone}}</td>
                <td >{{$x->role}}</td>
                <td>
                    @if ($x->foto!='')
                        <img src="{{Storage::url(Auth::user()->foto)}}" style="width: 60px; height:60px;" alt="Photo Profile" class="photo-profile shadow" /> 
                    @else
                        <img src="./assets/images/admin.jpg" style="width: 60px; height:60px;" alt="Photo Profile" class="photo-profile shadow" />
                        
                    @endif
                </td>
                <td >
                    <a class="btn badge bg-warning" href="/user/{{$x->id}}/edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        Ubah</a>
                        @if ($x->relasi==0)
                            <form onclick="return confirm('Data Mau Dihapus?')" class="d-inline" action="/user/{{$x->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn badge bg-danger" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                    Hapus
                                </button>
                            </form>
                        @else
                            <button disabled class="btn badge bg-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                                Hapus
                            </button>
                        @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-3 offset-10 mt-3">
        {{ $data->links() }}
    </div>
</div>
@endsection