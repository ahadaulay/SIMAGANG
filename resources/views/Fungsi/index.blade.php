@extends('Layout.master')

@section('content')
<h4>DATA FUNGSI</h4>

<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h5 class="card-title text-white ">FUNGSI</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <a href="/fungsi/create">
              <button type="button" class="btn btn-primary m-3 ml-3" >Tambah Fungsi</button>
            </a>  
          </div>
          <!-- table hover -->
          <div class="table-responsive">

            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>Pembimbing</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no = 1;
                @endphp

                @foreach($data as $w)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$w->nama}}</td>
                  <td>{{$w->pembimbing}}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/fungsi/{{$w->id}}/edit">
                          <button type="button" class="btn btn-warning m-3" >EDIT</button>
                        </a>
                        <form action="/fungsi/{{$w->id}}/destroy" method="POST">
                          @csrf
                          @method('delete')
                          <button type="sumbit"  value="Delete" class="btn btn-danger m-3">HAPUS</button>
                        </form>
                      </div>
                  </td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hoverable rows end -->
@endsection
