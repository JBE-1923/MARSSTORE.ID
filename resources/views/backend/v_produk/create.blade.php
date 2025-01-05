@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('backend.produk.store') }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title"> {{$judul}} </h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <img class="foto-preview">
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" 
                                    onchange="previewFoto()">
                                    @error('foto')
                                    <div class="invalid-feedback alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control @error('kategori') isinvalid @enderror" name="kategori_id">
                                        <option value="" selected>--Pilih Kategori--</option>
                                        @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}"> {{ $k->nama_kategori }} </option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control @error('nama_produk') is-invalid @enderror"
                                    placeholder="Masukkan Nama Produk">
                                    @error('nama_produk')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Detail</label><br>
                                    <textarea name="detail" class="form-control
                                    @error('detail') is-invalid @enderror" id="ckeditor">{{ old('detail') }}</textarea>
                                    @error('detail')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" onkeypress="return 
                                    hanyaAngka(event)" name="harga" value="{{ old('harga') }}" class="form-control
                                    @error('harga') is-invalid @enderror" placeholder="Masukkan Harga Produk">
                                    @error('harga')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" onkeypress="return
                                    hanyaAngka(event)" name="stok" value="{{ old('stok') }}" class="form-control @error('stok')
                                    is-invalid @enderror" placeholder="Masukkan Stok Produk">
                                    @error('stok')
                                    <span class="invalid-feedback alert-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('backend.produk.index') }}">
                                <button type="button" class="btn btnsecondary">Kembali</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<!-- contentAkhir -->
@endsection