@extends('admin.templateadmin')
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
                  <th>Aksi</th>  
                  
                  
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
                      <td><button type="button" class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#modal-detail-{{$data->id_anggota}}">
                              <span class="icon text-white-50"><i class="fas fa-info-circle"></i>
                              </span>
                              <span class="text">Detail</span>  
                              </button>
                      </td>
                      <td>
                       <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#edit-data-{{$data->id_pengajuan}}">
                          <i class="fas fa-user-edit"></i>
                       </button>
                        <form action="{{url('deletePengajuan', $data->id_pengajuan)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                       <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </form>
                      </td>
                      
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


{{-- Modal Edit --}}
            @foreach ($datas as $data)
            <div class="modal fade" id="edit-data-{{$data->id_pengajuan}}" tabindex="-1" 
              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">{{$data->nama_anggota}}</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                        <div class="modal-body">
                          <form action="{{url('editPengajuan', $data->id_pengajuan)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="status">Nama : <strong>{{$data->nama_anggota}}</strong></label>
                            </div>
                            <div class="form-group">
                              <label for="status">No KTP : <strong>{{$data->no_ktp}}</strong></label>
                            </div>
                            <div class="form-group">
                              <label for="status">Jenis Kelamin : <strong>{{$data->jk}}</strong></label>
                            </div>
                             <div class="form-group">
                              <label for="status">Status</label>
                              <select class="select2-single-placeholder form-control" 
                                name="status" id="status" style="width: 100%">
                                <option value="">{{$data->status}}</option>
                                  <option value="Diterima">Diterima</option>
                                  <option value="Belum Diterima">Belum Diterima</option>
                              </select>
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
                
                @endforeach
{{-- Akhir Modal edit --}}
@endsection