@extends('Layout.master')

@section('content')

<h1>Tambah Peserta</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">PESERTA</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/peserta/store" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>nama</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="nama" placeholder="Masukkan nama ">
                    </div>

                    <div class="col-md-4">
                        <label>tanggal lahir</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="date" id="first-name" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="col-md-4">
                        <label>alamat</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat ">
                    </div>

                    <div class="col-md-4">
                        <label>asal instansi</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <select required name="asal_instansi_id" class="form-select"  aria-label="Default select example">
                        @foreach($asal as $w)
                          <option value="{{$w->id}}">{{$w->nama}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>fungsi</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <select required name="fungsi_id" class="form-select"  aria-label="Default select example">
                        @foreach($fungsi as $w)
                          <option value="{{$w->id}}">{{$w->nama}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>tanggal masuk</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="date" id="first-name" class="form-control" name="tanggal_masuk" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="col-md-4">
                        <label>tanggal keluar</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="date" id="first-name" class="form-control" name="tanggal_keluar" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="col-md-4">
                        <label>telepon</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="number" id="first-name" class="form-control" name="telepon" placeholder="Masukkan telepon ">
                    </div>

                    <div class="col-md-4">
                        <label>email</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="text" id="first-name" class="form-control" name="email" placeholder="Masukkan email ">
                    </div>

                    <div class="col-md-4">
                        <label>foto</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input required type="file" id="first-name" class="form-control" name="foto" placeholder="Masukkan foto ">
                    </div>

                    

                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" value="save" name="sumbit" class="btn btn-primary mr-1 mb-1 mt-3">Submit</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

@endsection
