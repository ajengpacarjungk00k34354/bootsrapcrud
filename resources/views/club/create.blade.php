@extends('layouts/app')
@section('content')
<form action="{{route('club.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6>Formulir Tambah Club</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Club</label>
                    <input type="text" class="form-control" name="nama_club" value="{{old('nama_club')}}">
                </div>
                <div class="form-group">
                    <label>Gelar</label>
                    <input type="text" class="form-control" name="gelar" value="{{old('gelar')}}">
                </div>
                <div class="form-group">
                    <label>Asal Negara</label>
                    <input type="text" class="form-control" name="asal_negara" value="{{old('asal_negara')}}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</form>

@endsection
