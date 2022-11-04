@extends('penduduk.master')
 
@section('form')
<form action="prosestambah" method="post">
  @csrf
                    <input type="hidden" class="form-control" id="id" name='id'>


                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="number" class="form-control" id="nik" name='nik' placeholder="Enter NIK" >
                    </div>


                    <div class="form-group">
                      <label for="nama">Nama Penduduk</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" >
                    </div>


                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='jenis_kelamin'>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name='alamat' placeholder="Enter Alamat" required >
                    </div>

                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='perkawinan'>
                        <option value="Sudah Menikah">Kawin</option>
                        <option value="Belum Menikah">Belum Kawin</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name='pekerjaan' placeholder="Enter Pekerjaan" >
                    </div>


                    <div class="form-group">
                      <label>Kewarganegaraan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='warga'>
                        <option value="WNI">Warga Negara Indonesia (WNI)</option>
                        <option value="WNA">Warga Negara Asing (WNA)</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="tempat">Tempat Lahir</label>
                      <input type="text" class="form-control" name='tempat_lahir' placeholder="Enter Tempat Lahir" >
                    </div>

                    <div class="form-group">
                      <label for="tannggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" name='tgl_lahir' placeholder="Enter Tanggal Lahir" >
                    </div>

                    <div class="form-group">
                      <label>Golongan Darah</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='gol_darah'>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                      </select>
                    </div>

                    <input type="submit">
                  </form>
@endsection