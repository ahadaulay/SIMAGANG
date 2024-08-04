@extends('Layout.master')

@section('content')

<h4>Tambah TAHUN</h4>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">FILTER PER TAHUN</h5>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/filter/peserta" method="POST" class="form form-horizontal">
                    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>Tahun</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="number" id="first-name" class="form-control" name="tahun" placeholder="Masukkan tahun">
                    </div>

                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" value="save" name="sumbit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

@endsection
