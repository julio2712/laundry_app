@extends('main')

@section('title','List Transaksi')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Transaksi</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i> {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Transaksi</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("transaksi.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tgl. Transaksi</th>
                            <th>Nama Pelanggan</th>
                            <th>Pembayaran</th>
                            <th>Paket</th>
                            <th>Status Order</th>
                            <th>Total</th>
                            <th colspan=2>Action</th>
                        </tr>
                    </thead>
                   {{--<tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                                {{--<td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td> 
                                <td><a href="{{ route("transaksi.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                                <td>
                                    <form action="{{ route("transaksi.destroy",[$item->id]) }}"
                                        method="POST">
                                        @method("delete")
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}

                    <tbody>
                        <tr>
                            <td> 1.</td>
                            <td>18/11/2019</td>
                            <td>Lunas</td>
                            <td>Anto</td>
                            <td>Cuci Spring Bed</td>
                            <td>Selesai</td>
                            <td>60.000</td>
                            <td><a class="btn btn-primary" href="detail"><i class="icon-edit"></i>Detail</a></td>
                            {{--<td><a href="" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td></td>
                            <td><form action="" method="POST">
                                @method("Hapus")

                            </td>--}}
                        </tr>

    
                        </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
