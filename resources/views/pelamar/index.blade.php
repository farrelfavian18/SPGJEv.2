@extends('layout.master')
@section('title','List Pelamar')
@section('content')

<!-- /.card -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Calon Pegawai PT. GINTING JAYA ENERGI</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>ID Pendaftaran</th>
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($pelamar as $item)
            <tr>
              <td scope = "row">{{ $no++ }}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->nama_lengkap}}</td>
              <td>{{$item->jabatans->nama_jabatan == "null" ? "N/A" : $item->jabatans->nama_jabatan}}</td>
              <td>{{$item->tempat_lahir}}</td>
              <td>{{$item->tanggal_lahir}}</td>
              <td>{{$item->jenis_kelamin}}</td>
              <td>{{$item->alamat_rumah}}</td>
              {{-- <td>{{$item->pendidikan_terakhir}}</td> --}}
            </tr>
          @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection