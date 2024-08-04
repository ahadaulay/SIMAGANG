@extends('Layout.master')

@section('content')

<h1>Edit Peserta</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">PESERTA</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/peserta/{{$data->id}}" enctype="multipart/form-data" method="POST" class="form form-horizontal">
                    @csrf
                    @method('put')
                <div class="form-body">
                    <div class="row">

                        <div class="col-md-4">
                            <label>nama</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input required value="{{$data->nama}}" type="text" id="first-name" class="form-control" name="nama" placeholder="Masukkan nama ">
                        </div>
    
                        <div class="col-md-4">
                            <label>tanggal lahir</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input required value="{{$data->tanggal_lahir}}" type="date" id="first-name" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>alamat</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input required value="{{$data->alamat}}" type="text" id="first-name" class="form-control" name="alamat" placeholder="Masukkan alamat ">
                        </div>
    
                        <div class="col-md-4">
                            <label>Asal Instansi</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <select required name="asal_instansi_id" class="form-select" aria-label="Default select example">
                                @foreach($asal as $w)
                                    <option value="{{ $w->id }}" {{ $w->id == $data->asal_instansi_id ? 'selected' : '' }}>
                                        {{ $w->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
    
                        <div class="col-md-4">
                            <label>Fungsi</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <select required name="fungsi_id" class="form-select" aria-label="Default select example">
                                @foreach($fungsi as $w)
                                    <option value="{{ $w->id }}" {{ $w->id == $data->fungsi_id ? 'selected' : '' }}>
                                        {{ $w->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-4">
                            <label>tanggal masuk</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input value="{{$data->tanggal_masuk}}" required type="date" id="first-name" class="form-control" name="tanggal_masuk" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>tanggal keluar</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input value="{{$data->tanggal_keluar}}" required type="date" id="first-name" class="form-control" name="tanggal_keluar" placeholder="Masukkan tanggal lahir">
                        </div>
    
                        <div class="col-md-4">
                            <label>telepon</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input value="{{$data->telepon}}" required type="number" id="first-name" class="form-control" name="telepon" placeholder="Masukkan telepon ">
                        </div>
    
                        <div class="col-md-4">
                            <label>email</label>
                        </div>
                        <div class="col-md-8 form-group mb-3">
                            <input value="{{$data->email}}" required type="text" id="first-name" class="form-control" name="email" placeholder="Masukkan email ">
                        </div>
    
                        <div class="col-md-4">
                            <label>Foto</label>
                        </div>
                        
                        <div class="col-md-8 form-group mb-3">
                            <input type="file" id="foto" class="form-control" name="foto" placeholder="Masukkan foto">
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
