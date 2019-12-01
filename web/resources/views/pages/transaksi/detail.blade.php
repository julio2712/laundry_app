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
            

            <div class="panel panel-border panel-primary">
                <div class="panel-heading"> 
                    <h3 class="panel-title"><i class="fa fa-user-plus"></i> Detail Transaksi</h3> 
                </div>  <div class="panel-body"> 
                <div class="col-md-12 ">
                
                
                <form method="POST" action="transaksi/proses.php?act=update" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="ORD-000109">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="btn-primary" width="30%">No. Order</td>
                            <td>ORD-000109</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Nama Lengkap</td>
                            <td>Deni Putra</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Alamat Lengkap</td>
                            <td>medan</td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Telepon</td>
                            <td>082364695537 </td>
                        </tr>
                        
                        <tr> 
                            <td class="btn-primary" width="30%">Tipe Pembayaran</td>
                            <td>Ditempat</td>
                        </tr>
                        
                        <tr> 
                            <td class="btn-primary" width="30%">Status Pembayaran</td>
                            <td>
                             <select name="status" class="form-control"><option value="Lunas" selected="">Lunas</option>
                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="btn-primary" width="30%">Status Order</td>
                            <td>
                                <select name="status_order" class="form-control"><option value="Baru" selected="">Baru</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
                <option value="Batal">Batal</option>
                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="btn-primary" width="30%">Tanggal Ambil</td>
                            <td>18/29/2019 </td>
                        </tr>
                                                    
                    </tbody>
                </table>
                            
                </form></div> 
                <div class="col-md-4 pull-right" style="margin-bottom:15px; z-index:1;"></div>
                  <div class="col-md-12">
                    <div class="scroll_div">
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl. Order</th>
                                    <th>Paket Laundry</th>
                                    <th width="20%">Berat Cucian</th>
                                    <th width="20%">Harga/Kg</th>
                                    <th width="20%">Subtotal</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>18/11/2019</td>
                                    <td>Cuci Spring Bed</td>
                                    <td>3 kg</td>
                                    <td>Rp. 20.000</td>
                                    <td>Rp. 60.000</td>
                                </tr>
                            </tbody>
                            
                            <tbody>
                                <tr>
                                    <td colspan="4" class="btn-primary"><center><strong>TOTAL PESANAN</strong></center></td>
                                    <td></td>
                                    <td><strong id="label_total_pesanan">Rp. 60.000</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <input value="Proses Order" class="btn btn-primary" type="submit" name="update">
                    <a href="transaksi/kwitansi.php?id=ORD-000109" target="_blank" class="btn btn-default">Cetak Invoice</a><br><br>
                      
                   </div>
                 </div>    			 
                </div>   			 
                </div>






        </div>
    </div>
</div>
@endsection
