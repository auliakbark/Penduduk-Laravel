@extends('penduduk.master')
 
@section('edit')
<form action="{{ url('prosesupdate', $dataPenduduk->id) }}" method="post">
  @csrf
                    <input type="hidden" class="form-control" id="id" name='id'>


                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input type="number" class="form-control" id="nik" name='nik' placeholder="Enter NIK" value="{{$dataPenduduk->nik}}">
                    </div>


                    <div class="form-group">
                      <label for="nama">Nama Penduduk</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="{{$dataPenduduk->nama}}">
                    </div>


                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='jenis_kelamin' value="{{$dataPenduduk->jenis_kelamin}}">
                        <option value="Laki-laki" @if($dataPenduduk->jenis_kelamin =="Laki-laki") selected @endif>Laki-Laki</option>
                        <option value="Perempuan" @if($dataPenduduk->jenis_kelamin =="Perempuan") selected @endif>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name='alamat' placeholder="Enter Alamat" required value="{{$dataPenduduk->alamat}}">
                    </div>

                    <div class="form-group">
                      <label>Status Perkawinan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='perkawinan'>
                        <option value="Sudah Menikah" @if($dataPenduduk->perkawinan =="Sudah Menikah") selected @endif>Sudah Kawin</option>
                        <option value="Belum Menikah" @if($dataPenduduk->perkawinan =="Belum Menikah") selected @endif>Belum Kawin</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="pekerjaan">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaan" name='pekerjaan' placeholder="Enter Pekerjaan" value="{{$dataPenduduk->pekerjaan}}">
                    </div>


                    <div class="form-group">
                      <label>Kewarganegaraan</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='warga'>
                        <option value="WNI" @if($dataPenduduk->warga =="Warga Negara Indonesia (WNI)") selected @endif>Warga Negara Indonesia (WNI)</option>
                        <option value="WNA" @if($dataPenduduk->warga =="Warga Negara Asing (WNA)") selected @endif>Warga Negara Asing (WNA)</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="tempat">Tempat Lahir</label>
                      <input type="text" class="form-control" name='tempat_lahir' placeholder="Enter Tempat Lahir" value="{{$dataPenduduk->tempat_lahir}}">
                    </div>

                    <div class="form-group">
                      <label for="tanggal">Tanggal Lahir</label>
                      <input type="date" class="form-control" name='tgl_lahir' placeholder="Enter Tanggal Lahir" value="{{$dataPenduduk->tgl_lahir}}">
                    </div>

                    <div class="form-group">
                      <label>Golongan Darah</label>
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name='gol_darah' >
                        <option value="A" @if($dataPenduduk->gol_darah =="A") selected @endif>A</option>
                        <option value="B" @if($dataPenduduk->gol_darah =="B") selected @endif>B</option>
                        <option value="AB" @if($dataPenduduk->gol_darah =="AB") selected @endif>AB</option>
                        <option value="O" @if($dataPenduduk->gol_darah =="O") selected @endif>O</option>
                      </select>
                    </div>

                    <input type="submit">
                  </form>
@endsection