{{-- <div class="form-check form-check-success">
    <input class="form-check-input" type="radio" name="keterangan" id="Success" value="lulus" checked>
    <label class="form-check-label" for="Success">
        Lulus
    </label>
</div>
<div class="form-check form-check-warning">
    <input class="form-check-input" type="radio" name="keterangan" id="Warning" value="tidak_lulus" checked>
    <label class="form-check-label" for="Warning">
        Tidak Lulus
    </label>
</div> --}}
@extends('layout.master')
@section('title','Pengumuman Seleksi')
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
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($pelamar as $item)
            <tr>
              <td scope = "row">{{$item->id}}</td>
              <td>{{$item->nama_lengkap}}</td>
              <td>{{$item->jabatans->nama_jabatan}}</td>
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