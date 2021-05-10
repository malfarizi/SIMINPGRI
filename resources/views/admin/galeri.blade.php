@extends('admin.templateadmin')
@section('title', 'Galeri')
    
@section('content')

  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kelola Galeri</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kelola Galeri</li>
      </ol>
    </div>
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"> Kelola Galeri</h6>
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

            <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal"
                id="#myBtn">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Gambar</span>  
              </button>
          
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form id="frmAddJadwal" action="{{url('addGaleri')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="nama_gambar">Nama Gambar</label>
                          <input type="text" class="form-control" id="nama_gambar" name="nama_gambar"
                           placeholder="Masukan Nama Gambar">
                      </div>

                      <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" id="gambar" class="form-control" name="gambar" placeholder="">
                      </div>  

                      <div class="form-group">
                          <label for="deskripsi_gambar">Deskripsi Gambar</label>
                          <textarea type="text" class="form-control" id="deskripsi_gambar" name="deskripsi_gambar"
                           placeholder="Masukan Deskripsi Gambar"></textarea>
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
                  <th>Nama Gambar</th>
                  <th>Gambar</th>
                  <th>Deskripsi Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
             @foreach ($datas as $data)
                      <tr>
                      <td>{{$loop->iteration}}.</td>
                      <td>{{$data->nama_gambar}}</td>
                      <td><img src="{{ url('images/galeri/'.$data->gambar) }}" style="width: 200px; height: 150px;"></td>
                      <td>{{$data->deskripsi_gambar}}</td>
                      
                        <td>
                       <button type="button" class="btn btn-primary" data-toggle="modal" 
                        data-target="#edit-data-{{$data->id_galeri}}">
                          <i class="fas fa-user-edit"></i>
                       </button>
                        <form action="{{url('deleteGaleri', $data->id_galeri)}}" method="POST" class="d-inline">
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

   

   
{{-- Modal Edit --}}
            @foreach ($datas as $data)
            <div class="modal fade" id="edit-data-{{$data->id_galeri}}" tabindex="-1" 
              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                        <div class="modal-body">
                          <form action="{{url('editGaleri', $data->id_galeri)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                              <label for="nama_gambar">Nama Gambar</label>
                              <input type="text" class="form-control" 
                                value="{{ $data->nama_gambar }}" id="nama_gambar" name="nama_gambar" 
                                placeholder="Masukan nama acara">
                              @error('nama_gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                           
                            <div class="form-group">
                              <label for="deskripsi_gambar">Deskripsi Gambar</label>
                              <input type="text" class="form-control" 
                                value="{{ $data->deskripsi_gambar }}" id="deskripsi_gambar" name="deskripsi_gambar" 
                                placeholder="Masukan deskripsi gambar">
                              @error('deskripsi_gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="gambar">Gambar</label>
                              <input type="file" id="gambar" class="form-control" name="gambar" placeholder="">
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