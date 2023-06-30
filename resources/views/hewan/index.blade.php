@extends('layouts.app')

@section('title', 'Data Hewan')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Hewan</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('hewan.tambah') }}" class="btn btn-primary mb-3">Tambah Hewan</a>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kode Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Umur</th>
                            <th>Deskripsi</th>
                            <th>Syarat Adopsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($hewan->count() > 0)
                        @foreach($hewan as $h)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $h->nama_hewan }}</td>
                                <td class="align-middle">{{ $h->kode_hewan }}</td>
                                <td class="align-middle">{{ $h->jenis_hewan }}</td>
                                <td class="align-middle">{{ $h->umur_hewan }}</td>  
                                <td class="align-middle">{{ $h->deskripsi }}</td>  
                                <td class="align-middle">{{ $h->syarat }}</td> 
                                <td class="align-middle">{{ $h->foto }}</td> 
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('hewan.edit', $h->id)}}" type="button" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('hewan.destroy', $h->id) }}" method="POST" type="button" class="btn btn-danger 
                                        p-0" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger m-0">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">Hewan not found</td>
                            </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection