@extends('Layout.master')

@section('content')

<h1>Edit Asal Instansi</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">ASAL INSTANSI</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/asal/{{$data->id}}" method="POST" class="form form-horizontal">
                    @csrf
                    @method('put')
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>nama</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input value="{{$data->nama}}" required type="text" id="first-name" class="form-control" name="nama" placeholder="Masukkan nama ">
                    </div>
                

                    <div class="col-md-4">
                        <label>elamat</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input value="{{$data->alamat}}" required type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat  ">
                    </div>

                    <div class="col-md-4">
                        <label>email</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input value="{{$data->email}}" required type="text" id="first-name" class="form-control" name="email" placeholder="Masukkan email ">
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
