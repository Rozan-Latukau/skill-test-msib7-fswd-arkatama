@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Data Travel</b></div>
                <div class="col col-md-6">
                    <a href="#" class="btn btn-success btn-sm float-end">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Kode Booking</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kota</th>
                    <th>Usia</th>
                    <th>Tahun Lahir</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>cek</td>
                    <td>cek</td>
                    <td>cek</td>
                    <td>cek</td>
                    <td>cek</td>
                    <td>cek</td>
                    <td>
                        <div class="text-black d-flex gap-3 text-center">
                            <a href="#">Lihat</a>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </div>

                    </td>

                </tr>

            </table>

        </div>
    </div>
@endsection
