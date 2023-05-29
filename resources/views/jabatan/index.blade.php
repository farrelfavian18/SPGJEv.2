@extends('layout.master')
@section('title','List Posisi')
@section('content')

<!-- /.card -->
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title" >Jabatan yang dilamar</h3>
    </div>    
    <!-- /.card-header -->
    <div class="card-body text-left">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Jabatan</th>
          <th>Deskripsi</th>
          <th>Dibuat</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($jabatan as $item)
          <tr>
            <th scope="row">{{ $item->kode_jabatan }}</th>
            <td>{{ $item->jabatan }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->created_at->diffForHumans() }}</td>
          </td>
          <td class="project-actions">
              <a class="btn btn-info btn-sm" href="/jabatan/show/{{$item->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td>
          </tr>
          @endforeach
        <a href ="{{url('/jabatan/create')}}" class="btn btn-success">Tambah Jabatan +</a>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection