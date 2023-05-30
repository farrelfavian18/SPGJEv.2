@extends('layout.master')
@section('title','Formulir Pendaftaran')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Diharapkan mengisi formulir dengan benar*</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/pelamar/insert" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="email" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputPassword1">Jabatan yang dilamar</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan alamat lengkap">
              </div> --}}
              <a>Jabatan yang dilamar</a>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Pilih Jabatan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input type="email" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal lahir</label>
                <a></a>
                <input type="datetime-local" id="birthdaytime" name="birthdaytime">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Umur</label>
                <input type="email" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
              </div>
              
              <div class="form-group">
                <label for="exampleInputFile">Curriculum Vitae (CV)</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demikian data yang dimasukan benar adanya dan sesuai fakta</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection