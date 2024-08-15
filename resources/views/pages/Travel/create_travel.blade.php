@extends('layouts.master')

@section('content')
    <div class="text-left mb-3">
        <input type="submit" class="btn btn-secondary" value="Kembali" />
    </div>
    <div class="card">
        <div class="card-header">Tambahkan Data Travel</div>

        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Tanggal Kebarangkatan</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal-brngt" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Kuota</label>
                    <div class="col-sm-10">
                        <input type="number" name="kuota" class="form-control" />
                    </div>
                </div>
                <div class="text-left">
                    <input type="submit" class="btn btn-primary" value="Tambah" />
                </div>
            </form>
        </div>
    </div>
@endsection
