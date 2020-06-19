@extends('layouts.app')

@section('head')
<script src="{{ mix('js/mahasiswa/index.js') }}" defer></script>
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-danger">Data Mahasiswa</div>

            <div class="card-body">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-outline-primary">Add Data</a>
                <hr>
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Program Studi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @forelse ($mahasiswa as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->program->nama }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-outline-success">Update</a>
                                <a href="{{ route('mahasiswa.destroy', ['id' => $data->id]) }}" class="btn btn-outline-danger">Delete</a>
                            </td>
                        @empty
                            <td class="text-center" colspan="3">Tidak Ada Data !</td>
                        </tr>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection