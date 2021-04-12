@extends('admin.templateadmin')

@section('title', 'Anggota')
    
@section('content') 

        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Anggota</li>
            </ol>
          </div>
{{-- Modal Tambah --}}
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal"
                        data-target="#exampleModal" id="#myBtn">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data Anggota</span>
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{url('#')}}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="username">Nama</label>
                                            <input type="text" class="form-control" id="Nama" name="Nama"
                                                placeholder="Masukan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Alamat</label>
                                            <input type="text" class="form-control" id="Alamat" name="Alamat"
                                                placeholder="Masukan Alamat">
                                        </div>
                                        <label>Jenis Kelamin</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk1"
                                                value="laki-laki">
                                            <label class="form-check-label" for="jk1">Laki - Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk2"
                                                value="perempuan">
                                            <label class="form-check-label" for="jk2">Perempuan</label>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="nama">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                                                placeholder="Masukan Alamat">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">No KTP</label>
                                            <input type="text" class="form-control" id="No KTP" name="No KTP"
                                                placeholder="Masukan No KTP">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Kelurahan</label>
                                            <input type="text" class="form-control" id="Kelurahan" name="Kelurahan"
                                                placeholder="Masukan Kelurahan">
                                        </div>

                                          <div class="form-group">
                                            <label for="nama">Kecamatan</label>
                                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan"
                                                placeholder="Masukan Kecamatan">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">No Telp</label>
                                            <input type="text" class="form-control" id="No Telp" name="No Telp"
                                                placeholder="Masukan No Telp">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Tugas</label>
                                            <input type="text" class="form-control" id="Tugas" name="Tugas"
                                                placeholder="Masukan Tugas">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Tempat Kerja</label>
                                            <input type="text" class="form-control" id="Tempat Kerja" name="Tempat Kerja"
                                                placeholder="Masukan Tempat Kerja">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Tanggal Mulai Kerja</label>
                                            <input type="text" class="form-control" id="Tanggal Mulai Kerja" name="Tanggal Mulai Kerja"
                                                placeholder="Masukan Tanggal Mulai Kerja">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Status PNS</label>
                                            <input type="text" class="form-control" id="Status PNS" name="Status PNS"
                                                placeholder="Masukan Status PNS">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Golongan</label>
                                            <input type="text" class="form-control" id="Golongan" name="Golongan"
                                                placeholder="Masukan Golongan">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Tingkat Sekolah</label>
                                            <input type="text" class="form-control" id="Tingkat Sekolah" name="Tingkat Sekolah"
                                                placeholder="Masukan Tingkat Sekolah">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Status Lembaga</label>
                                            <input type="text" class="form-control" id="Status Lembaga" name="Status Lembaga"
                                                placeholder="Masukan Status Lembaga">
                                        </div>

                                         <div class="form-group">
                                            <label for="nama">Mengajar</label>
                                            <input type="text" class="form-control" id="Mengajar" name="Mengajar"
                                                placeholder="Masukan Mengajar">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                {{-- Akhir Modal Tambah --}}
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                </div>
                
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        
                        <th>Detail</th>
                        <
                      </tr>
                    </thead>
                    <tbody id="show_data"> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


    <!-- Modal Detail -->
      <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Jenis Kelamin :</li>
              <li class="list-group-item">Tempat Lahir  : </li>
              <li class="list-group-item">Agama :</li>
              <li class="list-group-item">No Telp :</li>
              <li class="list-group-item">Email :</li>
              <li class="list-group-item">Foto :</li>
              <li class="list-group-item">Kelurahan </li>
              <li class="list-group-item">Kecamatan :</li>
              <li class="list-group-item">Tugas :</li>
              <li class="list-group-item">Tempat Kerja :</li>
              <li class="list-group-item">Tanggal Mulai Kerja :</li>
              <li class="list-group-item">Status PNS :</li>
              <li class="list-group-item">Golongan :</li>
              <li class="list-group-item">Tingkat Sekolah : </li>
              <li class="list-group-item">Status Lembaga :</li>
              <li class="list-group-item">Mengajar : </li>

             
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
      </div>



      
     
    
@endsection


