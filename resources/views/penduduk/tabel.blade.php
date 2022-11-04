@extends('penduduk.master')

@section('tabel')
              <div class="card-header">
                <h3 class="card-title">Data Table Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <td> NIK </td>
                        <td> Nama </td>
                        <td> Kelamin </td>
                        <td> Alamat </td>
                        <td> Status </td>
                        <td> Pekerjaan </td>
                        <td> Kewarganegaraan </td>
                        <td> Tempat Lahir </td>
                        <td> Tanggal Lahir </td>
                        <td> Golongan </td>
                        <td> Edit </td>   
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($dataPenduduk as $item)
                <tr>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->perkawinan }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->warga }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->gol_darah }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('prosesdelete',$item->id) }}" class="border-0 bg-danger rounded p-2"><i
                                    class="fa-solid fa-trash"></i></a>
                            <p> | </p>
                            <a href="{{ url('edit',$item->id) }}" class="border-0 bg-warning rounded p-2"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                  </tbody>
                </table>
                <!-- /.card-body -->
              </div>
@endsection