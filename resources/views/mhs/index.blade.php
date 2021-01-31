@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>Biodata Mahasiswa</h3>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('mhs.create') }}" class="btn btn-sm btn-success">Create New</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif


    <table class="table table-hover table-sm">
        <tr>
            <th width="50px">No.</th>
            <th width="300px">Nama Mahasiswa</th>
            <th>Gender</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th width="180px">Aksi</th>
        </tr>

        @foreach ($mahasiswa as $item)
        <tr>
            <td><b>{{ ++$i }}.</b></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->usia }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <form action="{{ route('mhs.destroy', $item->id) }}" method="POST">
                    <a class="btn btn-sm btn-primary" href="{{ route('mhs.show', $item->id) }}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('mhs.edit', $item->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $mahasiswa->links() !!}
</div>
@endsection
