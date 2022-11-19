@extends('layout.main')
@section('isi')

<div class="container mt-5">
    <div class="row">
    <div class ="col">
        <h2 class="fw-bold">Data Mahasiswa</h2>
    </div>
 </div>
  <div class="row">
      <table class="table table-striped table-hover">
          <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
            <th></th>
          </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nrp}}</td>
                <td>{{ $mhs->nama}}</td>
                <td>{{ $mhs->email}}</td>
                <td>{{ $mhs->alamat}}</td>
                <td>
                <a href="Mahasiswa/{{$mhs->id}}/edit" type="button" class="btn btn-primary">Edit </a>
                </td><td>
                <form action="Mahasiswa/{{$mhs->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Hapus"class="btn btn-danger " onclick="return confirm('are you sure?')">
                </form>
                </td>
                
            </tr>
        @endforeach
</table>
  </div>
</div>
@endsection