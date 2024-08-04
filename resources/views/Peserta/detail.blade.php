@extends('Layout.master')

@section('content')

<h1>DETAIL</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Detail {{$data->nama}}</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/peserta/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                    @method('put')
                <div class="form-body">
                    <div class="row">
                        <div class="container mb-3 ">
                            <center><img width="300px" height="300px" src="{{asset('storage/fotopeserta/'.$data->foto)}}"  alt=""></center>
                            
                        </div>
                        
                        <div class="col-md-4">
                            <label>nama</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly required value="{{$data->nama}}" type="text" id="first-name" class="form-control" name="nama" placeholder="Masukkan nama ">
                        </div>
    
                        <div class="col-md-4">
                            <label>tanggal lahir</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly required value="{{$data->tanggal_lahir}}" type="date" id="first-name" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>alamat</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly required value="{{$data->alamat}}" type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat ">
                        </div>
    

                        <div class="col-md-4">
                            <label>Asal Instansi</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly required value="{{$data->asalInstansi->nama }}" type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat ">
                        </div>
                        
                        <div class="col-md-4">
                            <label>Fungsi</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly required value="{{$data->fungsi->nama}}" type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat ">
                        </div>
                        
                        <div class="col-md-4">
                            <label>tanggal masuk</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly value="{{$data->tanggal_masuk}}" required type="date" id="first-name" class="form-control" name="tanggal_masuk" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>tanggal keluar</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly value="{{$data->tanggal_keluar}}" required type="date" id="first-name" class="form-control" name="tanggal_keluar" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>durasi magang</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly value="{{$data->durasi}} hari" required type="text" id="first-name" class="form-control" name="tanggal_keluar" placeholder="Masukkan tanggal lahir">
                        </div>
                        
    
                        <div class="col-md-4">
                            <label>telepon</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly value="{{$data->telepon}}" required type="number" id="first-name" class="form-control" name="telepon" placeholder="Masukkan telepon ">
                        </div>
    
                        <div class="col-md-4">
                            <label>email</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input readonly value="{{$data->email}}" required type="text" id="first-name" class="form-control" name="email" placeholder="Masukkan email ">
                        </div>


                    </div>
                </div>
                </form>

                <div class="col-sm-12 d-flex justify-content-start">
                    <a href="/peserta">
                        <button  class="btn btn-danger m-3">KEMBALI</button>
                    </a>
                    <a href="/peserta/{{$data->id}}/cetak">
                        <button  class="btn btn-primary m-3">CETAK</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
        </div>

@endsection
