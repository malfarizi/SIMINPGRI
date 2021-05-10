
@extends('anggota.templateanggota')
@section('title', 'Jadwal Acara')
    
@section('content')

  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jadwal Acara</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Jadwal Acara</li>
      </ol>
    </div>
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Jadwal Acara</h6>
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
            @if (session('admin'))
            <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal"
                id="#myBtn">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data Jadwal Acara</span>  
              </button>
          @endif
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal Acara</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="frmAddJadwal" action="{{url('addAcara')}}" method="POST" role="form">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="nama_acara">Nama Acara</label>
                          <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                           placeholder="Masukan Nama Acara">
                      </div>

                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" class="form-control" name="tanggal" placeholder="Masukan Tanggal">
                      </div>  

                      <div class="form-group">
                          <label for="deskripsi_acara">Deskripsi Acara</label>
                          <textarea type="text" class="form-control" id="deskripsi_acara" name="deskripsi_acara"
                           placeholder="Masukan Deskripsi Acara"></textarea>
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
                  <th>No.</th>
                  <th>Nama Acara</th>
                  <th>Tanggal</th>
                  <th>Deskripsi Acara</th>
                  @if (session('admin'))
                  <th>Aksi</th>
                  @endif
                </tr>
              </thead>
              <tbody>
             @foreach ($datas as $data)
                      <tr>
                      <td>{{$loop->iteration}}.</td>
                      <td>{{$data->nama_acara}}</td>
                      <td>{{$data->tanggal}}</td>
                      <td>{{$data->deskripsi_acara}}</td>
                      @if (session('admin'))
                        <td>
                       <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#edit-data-{{$data->id_acara}}">
                          <i class="fas fa-user-edit"></i>
                       </button>
                        <form action="{{url('deleteAcara', $data->id_acara)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                       <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                      </form>
                      </td>
                      @endif
                      @endforeach
                      </tr>  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   

   
{{-- Modal Edit --}}
            @foreach ($datas as $data)
            <div class="modal fade" id="edit-data-{{$data->id_acara}}" tabindex="-1" 
              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit Data Posyandu</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                        <div class="modal-body">
                          <form action="{{url('editAcara', $data->id_acara)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="nama_acara">Nama Acara</label>
                              <input type="text" class="form-control" 
                                value="{{ $data->nama_acara }}" id="nama_acara" name="nama_acara" 
                                placeholder="Masukan nama acara">
                              @error('nama_acara')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="tanggal">Tanggal</label>
                              <input type="date" class="form-control" 
                                value="{{ $data->tanggal }}" id="tanggal" name="tanggal" 
                                placeholder="Masukan nama acara">
                              @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="deskripsi_acara">Deskripsi Acara</label>
                              <input type="text" class="form-control" 
                                value="{{ $data->deskripsi_acara }}" id="deskripsi_acara" name="deskripsi_acara" 
                                placeholder="Masukan deskripsi acara">
                              @error('deskripsi_acara')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
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