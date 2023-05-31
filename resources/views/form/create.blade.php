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
                <input type="text" name="nama_lengkap" class="form-control" @error('nama_lengkap') is-invalid @enderror value="{{ old('nama_lengkap') }}" autofocus id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
                @error('nama_lengkap')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Jabatan yang dilamar</label>
                <div class="dropdown">
                <select name="jabatan" class="form-control">
                  <option value="">-Pilih Jabatan-</option>
                  @foreach ($jabatan as $item )
                    <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                  @endforeach
                </select>
                @error('jabatan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kota Tempat Lahir</label>
                <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama Kota saja (Contoh : Palembang)">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal lahir</label>
                <a></a>
                <input type="date" id="birthdaytime" name="tanggal_lahir">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Umur</label>
                <input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="Masukan Angka (Contoh : 21)">
              </div>
              <label>Jenis Kelamin</label>
              <div class="form-group">
                <input type="radio" name="jenis_kelamin" value="Pria">&ensp; Pria&ensp;</a>
                <input type="radio" name="jenis_kelamin" value="Wanita">&ensp; Wanita
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Alamat Rumah</label>
                <input type="text" name="alamat_rumah" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat Lengkap">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                <div class="dropdown">
                  <select name="pendidikan_terakhir" class="form-control">
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="STM">STM</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="D3">D3</option>
                  </select>
                  @error('pendidikan_terakhir')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Status Rumah Tangga</label>
                <div class="dropdown">
                  <select name="pendidikan_terakhir" class="form-control">
                    <option value="menikah">Menikah</option>
                    <option value="belum_menikah">Belum Menikah</option>
                    <option value="cerai">Cerai</option>
                  </select>
                  @error('pendidikan_terakhir')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor KTP (NIK)</label>
                <input type="text" name="nomor_ktp" class="form-control" id="exampleInputEmail1" placeholder="Masukan nomor KTP dengan benar">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Telpon</label>
                <input type="text" name="nomor_ktp" class="form-control" id="exampleInputEmail1" placeholder="Pastikan nomor dapat dihubungi (Disarankan menggunakan nomor WhatsApp)">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Kartu Keluarga</label>
                <input type="text" name="no_kK" class="form-control" id="exampleInputEmail1" placeholder="Masukan nomor Kartu Keluarga">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor NPWP yang berlaku</label>
                <input type="text" name="npwp" class="form-control" id="exampleInputEmail1" placeholder="Masukan NPWP dengan benar">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Sertifikat</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Masukan Sertifikat (size max 50mb, format PDF)</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div>
                  <label for="exampleInputEmail1">Masa Berlaku Sertifikat Habis</label>
                </div>
                <input type="date" id="birthdaytime" name="masa_berlaku_sertifikat">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Surat Izin Mengemudi</label>
              <div class="dropdown">
                <select name="sim" class="form-control">
                  <option value="sim_a">SIM A</option>
                  <option value="sim_c">SIM C</option>
                  <option value="belum_punya">Belum memiliki SIM</option>
                </select>
                @error('sim')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pengalaman Kerja</label>
              <input type="text" name="pengalaman_kerja" class="form-control" id="exampleInputEmail1" placeholder="Masukan tempat anda pernah bekerja">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pengalaman Jabatan</label>
              <input type="text" name="pengalaman_jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan pengalaman jabatan anda">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masa jabatan pengalaman</label>
              <input type="text" name="masa_jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan berapa lama pengalaman anda pada jabatan tersebut (Contoh : 2 Tahun)">
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