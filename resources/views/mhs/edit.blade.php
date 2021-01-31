@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Mahasiswa</h3>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops !!</strong> Something went wrong<br />
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mhs.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-8">
                    <strong>Nama: </strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $mahasiswa->nama }}">
                </div>
                <div class="col-sm-8">
                    <strong>Gender: </strong>
                    <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $mahasiswa->gender }}">
                </div>
                <div class="col-sm-8">
                    <strong>Usia: </strong>
                    <input type="text" name="usia" class="form-control" placeholder="Usia" value="{{ $mahasiswa->usia }}">
                </div>
                <div class="col-sm-8">
                    <strong>Alamat: </strong>
                    <textarea type="text" name="alamat" class="form-control" placeholder="Alamat" rows="4" cols="80">{{ $mahasiswa->alamat }}</textarea>
                </div>

                <div class="col-md-12">
                    <a class="btn btn-sm btn-success" href="{{ route('mhs.index') }}">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection