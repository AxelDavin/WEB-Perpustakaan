@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Buku
                </div>
                <div class="card-body">
                    <!-- Display error messages if there are any -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Create book form -->
                    <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" id="pengarang" name="pengarang"
                                value="{{ old('pengarang') }}">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                value="{{ old('penerbit') }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="col col-md-3">
                                <label for="image" class=" form-control-label">File Input</label>
                            </div>
                            <div class="col col-md-15">
                                <input type="file" id="image" name="image" class="form-control"></input>
                            </div>
                        </div>
                        </br>
                        <button type="submit" class="btn btn-primary">Tambah Buku</button>
                        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection