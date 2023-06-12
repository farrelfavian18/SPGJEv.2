@extends('layout.master')
@section('title','Seleksi Pelamar dan Terima Interview')
@section('content')

<!-- /.card -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Seleksi Calon Pegawai PT. GINTING JAYA ENERGI</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      {{-- <a href ="{{url('shift-data')}}" class="btn btn-success">Buat pengumuman</a> --}}
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>ID Pendaftaran</th>
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Keterangan</th>
          <th>Jadwal Interview</th>
          @if (Auth::check() && Auth::user()->role == '1')
          <th>Aksi</th>
          @endif
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
              {{-- <td>{{$item->pelamars->id_pelamar}}</td> --}}
              <td>{{$item->id_pelamar}}</td>
              {{-- <td>{{$item->pelamars->nama_lengkap == "null" ? "N/A" : $item->pelamars->nama_lengkap}}</td> --}}
              <td>{{$item->nama_lengkap}}</td>
              {{-- <td>{{$item->jabatans->nama_jabatan == "null" ? "N/A" : $item->pelamars->nama_jabatan}}</td> --}}
              {{-- <td>{{$item->id_jabatan}}</td> --}}
              {{-- <td>{{$item->jabatans->nama_jabatan == "null" ? "N/A" : $item->jabatans->nama_jabatan}}</td> --}}
              <td>{{$item->jabatans->nama_jabatan ?? 'None' }}</td>
              <td>{{$item->keterangan }}</td>
              <td>{{ Carbon\Carbon::parse($item->jadwal_interview)->format('l\ d-m-Y h:i:A') }}</td>
              @if (Auth::check() && Auth::user()->role == '1')
              <td class="project-actions">
                  <a class="btn btn-info btn-sm" href="interview/show/{{$item->id}}">
                      <i class="fas fa">
                      </i>
                      Seleksi
                  </a>
                  <a class="btn btn-danger btn-sm" href="interview/delete{{$item->id}}">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                  </a>
              </td>
              @endif
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