@extends('main')

@section('title','Form Transaksi')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("transaksi.index") }}">List Transaksi</a></li>
                        <li class="breadcrumb-item active">Form Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form transaksi</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("transaksi.update",[$data->id])
                                    :route("transaksi.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                            <label for="no_order">No. Order</label>
                            <input type="text"
                                class="form-control @error("no_order") is-invalid @enderror"
                                name="no_order" disabled="disabled" value={{ (isset($data)?$data->no_order:old("no_order")) }}>
                            @error("no_order")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        {{--<input type="text"
                            class="form-control @error("nama_pelanggan") is-invalid @enderror"
                            name="nama_pelanggan" placeholder="--Pilih Nama Pelanggan--" value={{ (isset($data)?$data->nama:old("nama_pelanggan")) }}>
                        @error("nama_pelanggan")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror--}}
                        <select name="nama_pelanggan" class="form-control">

                            <option value="Proses">Anto</option>
                           
                           
                            </select>
                    </div>

                    <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text"
                                class="form-control @error("telepon") is-invalid @enderror"
                                name="telepon" value={{ isset($data)?$data->telepon:old("telepon") }}>
                            @error("telepon")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text"
                            class="form-control @error("alamat") is-invalid @enderror"
                            name="alamat" placeholder="Masukkan Alamat Lengkap" value={{ (isset($data)?$data->alamat:old("alamat")) }}>
                        @error("alamat")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="paket">Paket</label>
                        {{--<input type="text"
                            class="form-control @error("paket") is-invalid @enderror"
                            name="paket" placeholder="--Pilih Paket Laundry--" value={{ isset($data)?$data->paket:old("paket") }}>
                        @error("paket")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror--}}
                        <select name="status_bayar" class="form-control">
                            
                                <option value="status_bayar">Cuci Sepatu</option>
                                <option value="status_bayar">Cuci Spring Bed</option>
                               
                               
                                </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="berat">Berat</label>
                        <input type="berat" placeholder="Input Berat"
                        class="form-control  @error("berat") is-invalid @enderror" name="berat" value={{ (isset($data)?$data->berat:old("berat")) }}>
                        @error("berat")
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                        @enderror
                    
                    </div>
                    <div class="form-group">
                        <label for="potong">Potong</label>
                        <input type="potong" placeholder="Input Jumlah Potong"
                        class="form-control  @error("potong") is-invalid @enderror" name="potong" value={{ (isset($data)?$data->potong:old("potong")) }}>
                        @error("potong")
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                        @enderror
                    </div>
                    

                        <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input id="datepicker-multiple" 
                                class="form-control" type="text" placeholder="dd/mm/yyyy" name="tanggal" value={{ (isset($data)?$data->tanggal:old("tanggal")) }}>
                                
                             
                            </div>

                            <div class="form-group">
                                    <label for="status_bayar">Status Bayar</label>
                                    {{--<input type="status_bayar" placeholder="--Pilih Status Bayar--"
                                    class="form-control @error("status_bayar") is-invalid @enderror" name="status_bayar" value={{ (isset($data)?$data->status_bayar:old("status_bayar")) }}>
                                    @error("status_bayar")
                                    <div class="invalid-feedback">
                                       {{$message}}
                                    </div>
                                    @enderror--}}
                                    <select name="status_bayar" class="form-control">
                            
                                            <option value="status_bayar">Lunas</option>
                                            <option value="status_bayar">Belum Dibayar</option>
                                           
                                           
                                            </select>
                                </div>
                                <div class="form-group">
                                        <label for="status_laundry">Status Laundry</label>
                                        {{--<input type="status_laundry"  placeholder="--Pilih Status Laundry--"
                                        class="form-control @error("status_laundry") is-invalid @enderror" name="status_laundry" value={{ (isset($data)?$data->status_laundry:old("status_laundry")) }}>
                                        @error("status_laundry")
                                        <div class="invalid-feedback">
                                           {{$message}}
                                        </div>
                                        @enderror--}}
                                        <select name="status_laundry" class="form-control" placeholder="--Pilih Status Laundry--">
                            
                                                <option value="status_laundry">On Process</option>
                                                <option value="status_laundry">Selesai</option>
                                               
                                               
                                                </select>
                                    </div>

                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("transaksi.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
