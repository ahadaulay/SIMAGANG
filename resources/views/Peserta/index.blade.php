@extends('Layout.master')

@section('content')
<h4>DATA PESETRA MAGANG</h4>

<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h5 class="card-title text-white ">PESERTA</h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            @if (session()->get('role') == "admin")

            <a href="/peserta/create">
              <button type="button" class="btn btn-primary m-3 ml-3" >Tambah Peserta</button>
            </a>  

            @endif

            <a href="/generate-peserta">
              <button type="button" class="btn btn-success m-3 ml-3" >Export</button>
            </a> 
          </div>
          <!-- table hover -->
          <div class="table-responsive p-3">

            <table class="table table-hover mb-0" id="myTable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Foto</th>
                  <th>Nama</th>
                  <th>Asal Instansi</th>
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
                  <td><img src="{{asset('storage/fotopeserta/'.$w->foto)}}" width="100px" alt=""></td>
                  <td>{{$w->nama}}</td>
                  <td>{{ $w->asalInstansi->nama }}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/peserta/{{$w->id}}/detail">
                        <button type="button" class="btn btn-primary m-3" >DETAIL</button>
                      </a>
                      @if (session()->get('role') == "admin")

                        <a href="/peserta/{{$w->id}}/edit">
                          <button type="button" class="btn btn-warning m-3" >EDIT</button>
                        </a>

                        <form action="/peserta/{{$w->id}}/destroy" method="POST">
                          @csrf
                          @method('delete')
                          <button type="sumbit"  value="Delete" class="btn btn-danger m-3">HAPUS</button>
                        </form>
                        @endif
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

