@extends('main')

@section('title','Form Detail Pembayaran')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Detail Pembayaran</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="req">Request Cucian</a></li>
                        <li class="breadcrumb-item active">Form Detail Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-blue text-white">
                <h3 class="card-title">Form Detail Pembayaran</h3>
            </div>
            <div class="card-body">
                            <form action="" method="POST" autocomplete="off">
                                    @csrf
                                    <h2>No. Resi        : 28192839123919</h2>
                                    <p>Nama Pelanggan   : Anto</p>
                                    <p>Alamat           : Medan</p>
                                    <p>Telepon          : 08832874835</p>
                                    <p>Estimasi Berat   : 4 Kg</p>
                                    <div class="form-group">
                                        <label for="paket">Pembayaran</label>
                                        <select name="status_bayar" class="form-control">
                                                
                                            <option value="status_bayar">Lunas</option>
                                            <option value="status_bayar">Belum Lunas</option>
                                           
                                           
                                            </select>
                                    
                                </div>
                    
                                </div>
                                <div class="form-group float-right">
                                        <a href="{{ route("transaksi.create") }}"  <i class="fa fa-arrow-left"> Lanjutkan</i></a>
                                </div>
                            </form>
                    
            
        </div>
    </div>
</div>

@endsection 