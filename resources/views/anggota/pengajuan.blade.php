@extends('anggota.templateanggota')
@section('title', 'Pengajuan')
    
@section('content')

  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pengajuan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pengajuan</li>
      </ol>
    </div>
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pengajuan</h6>
          </div>      
          <div class="card-header">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h6><i class="fas fa-check"></i><b> Berhasil!</b></h6>
              {{ session('success') }}
            </div>
            @endif
          </div>

          {{-- Modal Tambah --}}
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            @if(count($datas))
            
              @else
              <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal"
                id="#myBtn">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Ajukan Pengajuan</span>  
              </button>
              @endif
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengajuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="frmAddJadwal" action="{{url('addPengajuan')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                      <input type="text" class="form-control" id="id_anggota" name="id_anggota"  value="{{session('id_anggota')}}"
                            hidden="">
                      </div>
                      <div class="form-group">
                          <label for="">Nama Anggota</label>
                          <input type="text" class="form-control" id="" name=""  
                           placeholder="{{session('nama_anggota')}}" readonly>
                      </div>

                      <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" class="form-control" name="foto" placeholder="Masukan Tanggal">
                      </div>  
                      <div class="form-group">
                          <label for="tgl_lahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                           placeholder="Masukan tanggal lahir">
                      </div>
                      <div class="form-group">
                          <label for="tempat_lahir">Tempat Lahir</label>
                          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                           placeholder="Masukan tempat lahir">
                      </div>
                       <div class="form-group">
                          <label for="no_ktp">Nomor KTP</label>
                          <input type="text" class="form-control" id="no_ktp" name="no_ktp"
                           placeholder="Masukan nomor ktp">
                      </div>
                       <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email"
                           placeholder="Masukan email">
                      </div>
                      <div class="form-group">
                          <label for="agama">Agama</label>
                          <input type="text" class="form-control" id="agama" name="agama"
                           placeholder="Masukan agama">
                      </div>
                      <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <textarea type="text" class="form-control" id="alamat" name="alamat"
                           placeholder="Masukan alamat"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="kelurahan">Kelurahan</label>
                          <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                           placeholder="Masukan kelurahan">
                      </div>
                      <div class="form-group">
                          <label for="kecamatan">kecamatan</label>
                          <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                           placeholder="Masukan kecamatan">
                      </div>
                      <div class="form-group">
                          <label for="no_telp">Nomor Telepon</label>
                          <input type="text" class="form-control" id="no_telp" name="no_telp"
                           placeholder="Masukan nomor Telepon">
                      </div>
                      <div class="form-group">
                          <label for="tugas">Tugas</label>
                          <input type="text" class="form-control" id="tugas" name="tugas"
                           placeholder="Masukan tugas">
                      </div> 
                      <div class="form-group">
                          <label for="tempat_kerja">Tempat Kerja</label>
                          <input type="text" class="form-control" id="tempat_kerja" name="tempat_kerja"
                           placeholder="Masukan tempat kerja">
                      </div>
                      <div class="form-group">
                          <label for="tanggal_mulai_kerja">Tanggal Mulai Kerja</label>
                          <input type="date" class="form-control" id="tanggal_mulai_kerja" name="tanggal_mulai_kerja"
                           placeholder="Masukan tanggal mulai kerja">
                      </div>
                      <div class="form-group">
                          <label for="status_pns">Status PNS</label>
                          <input type="text" class="form-control" id="status_pns" name="status_pns"
                           placeholder="Masukan status PNS">
                      </div>
                      <div class="form-group">
                          <label for="golongan">Golongan</label>
                          <input type="text" class="form-control" id="golongan" name="golongan"
                           placeholder="Masukan golongan">
                      </div>
                      <div class="form-group">
                          <label for="tingkat_sekolah">Tingkat Sekolah</label>
                          <input type="text" class="form-control" id="tingkat_sekolah" name="tingkat_sekolah"
                           placeholder="Masukan tingkat sekolah">
                      </div>
                      <div class="form-group">
                          <label for="status_lembaga">Status Lembaga</label>
                          <input type="text" class="form-control" id="status_lembaga" name="status_lembaga"
                           placeholder="Masukan status lembaga Negeri/Swasta">
                      </div>
                      <div class="form-group">
                          <label for="mengajar">Mengajar</label>
                          <input type="text" class="form-control" id="mengajar" name="mengajar"
                           placeholder="Mata Pelajaran Yang Diajar">
                      </div>
                      <div class="form-group">
                         
                          <input type="text" class="form-control" id="status" name="status"
                          value="Belum Diterima "hidden>
                      </div>                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          {{-- Akhir Modal Tambah --}}

         
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <!-- <th>No.</th> -->
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>No KTP</th>
                  <th>Agama</th>
                  <th>Status Pengajuan</th> 
                  <th>Detail</th>  
                  
                  
                </tr>
              </thead>
              <tbody>
             @foreach ($datas as $data)
                      <tr>
                      <!-- <td>{{$loop->iteration}}.</td> -->
                      <td>{{$data->nama_anggota}}</td>
                      <td>{{$data->jk}}</td>
                      <td>{{$data->no_ktp}}</td>
                      <td>{{$data->agama}}</td>
                      <td>{{$data->status}}</td>
                      <td><button type="button" class="btn btn-primary btn-icon-split btn-sm"                          data-toggle="modal" data-target="#modal-detail-{{$data->id_anggota}}">
                              <span class="icon text-white-50"><i class="fas fa-info-circle"></i>
                              </span>
                              <span class="text">Detail</span>  
                              </button></td>
                      
            @endforeach
                      </tr>  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    @foreach($datas as $data)
    <!-- Modal Detail -->
      <div class="modal fade" id="modal-detail-{{$data->id_anggota}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{$data->nama_anggota }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Foto : <img src="{{ url('images/anggota/'.$data->foto) }}" style="width: 200px; height: 150px;"> </li>
              <li class="list-group-item">Tanggal Lahir  : {{$data->tgl_lahir}}</li>
              <li class="list-group-item">Tempat Lahir : {{$data->tempat_lahir}} </li>
              <li class="list-group-item">No KTP : {{$data->no_ktp}} </li>
              <li class="list-group-item">Email : {{$data->email}} </li>
              <li class="list-group-item">Agama : {{$data->agama}} </li>
              <li class="list-group-item">Alamat : <td>{{$data->alamat}} </li>
              <li class="list-group-item">kelurahan : <td>{{$data->kelurahan}} </li>
              <li class="list-group-item">Kecamatan : <td>{{$data->kecamatan}} </li>
              <li class="list-group-item">No Telp : <td>{{$data->no_telp}} </li>
              <li class="list-group-item">Tugas : <td>{{$data->tugas}} </li>
              <li class="list-group-item">Tempat Kerja : <td>{{$data->tempat_kerja}} </li> 
              <li class="list-group-item">Tanggal Mulai Kerja : <td>{{$data->tanggal_mulai_kerja}} </li>
              <li class="list-group-item">Status PNS : <td>{{$data->status_pns}} </li>
              <li class="list-group-item">Golongan: <td>{{$data->golongan}} </li>
              <li class="list-group-item">Tingkat Sekolah : <td>{{$data->tingkat_sekolah}} </li>
              <li class="list-group-item">Status Lembaga : <td>{{$data->status_lembaga}} </li>  
              <li class="list-group-item">Mengajar : <td>{{$data->mengajar}} </li>  
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
      </div>
      @endforeach
@endsection