@extends('layout.main')
@section('isi')

<div class="col-md-8 offset-sm-2 ">
                <h3 class="display-6" style="color:#557153; margin-top:50px; font-family:'lucida sans';"> Input Data Mahasiswa</h3>
</div>
<div class="col-md-8 offset-sm-2" style="font-size: 17px; color:#557153">
        <form action="{{url('/store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nrp"> NRP </label>
                <input class="form-control" type="text" name="nrp">
            </div>
            <div class="form-group">
                <label for="nama"> Nama </label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label for="email"> Email </label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input class="form-control" type="text" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
<br>
<br>
@endsection