@extends('Layout.master')

@section('content')
<h1>DATA DURASI</h1>

<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="card-title text-white ">ASAL DURASI</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <a href="/durasi/create">
              <button type="button" class="btn btn-primary m-3 ml-3" >Tambah Durasi</button>
            </a>  
          </div>
          <!-- table hover -->
          <div class="table-responsive">

            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Durasi</th>
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
                  <td>{{$w->durasi}} Hari</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/durasi/{{$w->id}}/edit">
                          <button type="button" class="btn btn-warning m-3" >EDIT</button>
                        </a>
                        <form action="/durasi/{{$w->id}}/destroy" method="POST">
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

