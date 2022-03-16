@extends('layouts.main_layouts')
@section('container')
    @if (session('success'))
        <div class="alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="jumbotron">
        <div class="card">
            <div class="card-header card-title">
                <h4>Pencatatan Buku</h4>
            </div>
            <div class="card-body">
                <center>
                <p class="card-text">Laravel CRUD Untuk Mencatat Informasi Buku <br>Mujahid Akbar Ramadhan -
                    XI RPL 2</p></center>
                <a href=" {{ url('/books/create') }} " class="btn btn-warning">Tambah Buku</a>
                <br><br><br>
                <table class="table table-hover table-striped table-bordered">
                    <thead class="table table-dark text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <!-- <th scope="col">Sinopsis</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (isset($books) ? $books : [] as $item)
                            <tr>
                                <th> {{ $loop->iteration }} </th>
                                <td> {{ $item->judul }} </td>
                                <td> {{ $item->penulis }} </td>
                                <td> {{ $item->penerbit }} </td>
                                <!-- <td> {{ $item->sinopsis }} </td> -->
                                <td class="text-center">
                                    <a href="{{ url('/books/' . $item->id) }}" class="btn btn-secondary badge rounded-pill"
                                        style="width: 80px; height: 25px;">VIEW</a><br>
                                    <a href="{{ url('/books/' . $item->id . '/edit') }}"
                                        class="btn btn-info badge rounded-pill"
                                        style="width: 80px; height: 25px;">EDIT</a><br>
                                    <form action="{{ url('/books' . '/' . $item->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger badge rounded-pill"
                                            style="width: 80px; height: 25px;" type="submit" onclick="return confirm(&quot;Apakah yakin dihapus?&quot;)">DELETE</button>
                                    </form>
                                    {{-- <a href="{{ url() }}" class="btn btn-danger badge rounded-pill"
                                        style="width: 80px; height: 25px;">DELETE</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
