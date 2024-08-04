@extends('Layout.master')

@section('content')

<h1>Edit Durasi</h1>

<section id="basic-4zontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">DURASI</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form action="/durasi/{{$data->id}}" method="POST" class="form form-horizontal">
                    @csrf
                    @method('put')
                <div class="form-body">
                    <div class="row">

                    <div class="col-md-4">
                        <label>durasi</label>
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <input value="{{$data->durasi}}" required type="number" id="first-name" class="form-control" name="durasi" placeholder="Masukkan durasi (hari) ">
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
