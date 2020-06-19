@extends('layouts.app')
@section('head')
    <script src="{{ mix('js/nilai/index.js') }}" defer></script>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary">Nilai Mata Kuliah</div>

            <div class="card-body">
                <a href="{{ route('nilai.create') }}" class="btn btn-outline-primary">Add Nilai</a>
                <hr>
                 <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr>
                            {{-- <th>No</th> --}}
                            <th>Nama Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @forelse ($nilai as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->mahasiswa }}</td>
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