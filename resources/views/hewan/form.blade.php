@extends('layouts.app')

@section('title', 'Form Tambah Data Hewan')
    
@section('contents')
    <form action="{{ route('hewan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_hewan">Nama Hewan</label>
                            <input type="text" name="nama_hewan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="kode_hewan">Kode Hewan</label>
                            <input type="text" name="kode_hewan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_hewan">Jenis Hewan</label>
                            <input type="text" name="jenis_hewan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="umur_hewan">Umur</label>
                            <input type="text" name="umur_hewan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="syarat">Syarat Adopsi</label>
                            <textarea name="syarat" class="form-control"></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection