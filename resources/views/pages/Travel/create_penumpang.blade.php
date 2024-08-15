@extends('layouts.master')

@section('content')
    <div class="text-left mb-3">
        <input type="submit" class="btn btn-secondary" value="Kembali" />
    </div>
    <div class="card">
        <div class="card-header">Tambahkan Data Penumpang</div>

        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Kode Booking</label>
                    <div class="col-sm-10">
                        <input type="string" name="kode" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Nama</label>
                    <div class="col-sm-10">
                        <input type="string" name="nama" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Usia</label>
                    <div class="col-sm-10">
                        <input type="number" name="usia" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Kota</label>
                    <div class="col-sm-10">
                        <input type="string" name="kota" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Tahun Lahir</label>
                    <div class="col-sm-10">
                        <input type="integer" name="tahun_lahir" class="form-control" />
                    </div>
                </div>
                <div class="dropdown">
                    <label class="col-sm-2 col-label-form">Travel</label>

                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Travel
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>

                </div>
                <div class="text-left mt-4">
                    <input type="submit" class="btn btn-primary" value="Tambah" />
                </div>

            </form>
        </div>
    </div>
@endsection
