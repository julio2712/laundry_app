@extends('main')

@section('title','Form Paket')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Paket</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("paket.index") }}">List Paket</a></li>
                        <li class="breadcrumb-item active">Form Paket</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Paket</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("paket.update",[$data->id])
                                    :route("paket.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="paket">Paket</label>
                        <input type="text"
                            class="form-control @error("paket") is-invalid @enderror"
                            name="paket" value={{ (isset($data)?$data->paket:old("paket")) }}>
                        @error("paket")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text"
                            class="form-control @error("harga") is-invalid @enderror"
                            name="harga" value={{ isset($data)?$data->harga:old("harga") }}>
                        @error("harga")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   
                    
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("paket.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
