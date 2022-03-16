@extends('layouts.main_layouts');
@section('container')
@if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">Edit Data</div>
        <div class="card-body">
            <form action="{{ url('books/' . $books->id) }}" method="post">
                @csrf
                @method("PATCH")
                <input type="hidden" class="form-control" name="id" id="id">

                <label for="">Judul Buku</label><br>
                <input type="text" class="form-control" name="judul" id="judul" value=" {{ $books->judul }} ">
                <br>
                <label for="">Penulis Buku</label><br>
                <input type="text" class="form-control" name="penulis" id="penulis" value=" {{ $books->penulis }} ">
                <br>
                <label for="">Penerbit Buku</label><br>
                <input type="text" class="form-control" name="penerbit" id="penerbit" value=" {{ $books->penerbit }} ">
                <br>
                <label for="">Sinopsis Buku</label><br>
                <input type="text" class="form-control" name="sinopsis" id="sinopsis" value=" {{ $books->sinopsis }} ">
                <br><br>
                <input type="submit" value="Simpan Perubahan" class="btn btn-success"><br>
            </form>
        </div>
    </div>
@endsection