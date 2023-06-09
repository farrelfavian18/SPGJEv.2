@extends('layout.master')
@section('title','Terima Interview')
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
          <th>Keterangan</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($interview as $item)
            <tr>
              <td scope = "row">{{ $no++ }}</td>
              {{-- <td>{{$item->id}}</td> --}}
              <td>{{$item->pelamars->id_pelamar == "null" ? "N/A" : $item->pelamars->id_pelamar}}</td>
              <td>{{$item->pelamars->nama_lengkap == "null" ? "N/A" : $item->pelamars->nama_lengkap}}</td>
              <td>{{$item->jabatans->nama_jabatan == "null" ? "N/A" : $item->pelamars->nama_jabatan}}</td>
              <td>{{$item->jadwal_interview}}</td>
              <td>{{$item->tanggal_lahir}}</td>
              <td>{{$item->keterangan }}</td>
              {{-- <td><a href="dokumen/{{ $item->sertifikat_migas }}"><button class="btn btn-success" type="button">Sertifikat</button><a></td>
                <td><a href="dokumen/{{ $item->cv }}"><button class="btn btn-success" type="button">CV</button><a></td>
              <td>{{$item->alamat_rumah}}</td> --}}
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