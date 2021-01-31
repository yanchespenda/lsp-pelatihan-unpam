@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="cols-md-12">
                <h3>Detail Mahasiswa</h3>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="cols-md-12">
                <div class="form-group">
                    <strong>Nama: </strong> {{ $mahasiswa->nama }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cols-md-12">
                <div class="form-group">
                    <strong>Gender: </strong> {{ $mahasiswa->gender }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cols-md-12">
                <div class="form-group">
                    <strong>Usia: </strong> {{ $mahasiswa->usia }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cols-md-12">
                <div class="form-group">
                    <strong>Alamat: </strong> {{ $mahasiswa->alamat }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cols-md-12">
                <a href="{{ route('mhs.index') }}" class="btn btn-sm btn-success">Back</a>
            </div>
        </div>
    </div>
@endsection