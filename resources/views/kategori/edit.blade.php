@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
            </div>

            <form action="/kategori/update/{{ $kategori->kategori_id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="kodeKategori" id="kodeKategori" 
                            placeholder="Masukkan kode kategori" 
                            value="{{ $kategori->kategori_kode }}">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            name="namaKategori" id="namaKategori" 
                            placeholder="Masukkan nama kategori"
                            value="{{ $kategori->kategori_nama }}">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection