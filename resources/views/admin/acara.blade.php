@extends('admin.templateadmin')

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
            <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal"
                id="#myBtn">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data Jadwal Acara</span>  
              </button>
              
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
                  <form id="frmAddJadwal" action="" method="POST" role="form">
                    @csrf
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="namaacara">Nama Acara</label>
                          <input type="text" class="form-control" id="namaacara" name="namaacara"
                           placeholder="Masukan Nama Acara">
                      </div>

                      <div class="form-group">
                        <label for="tgl">Tanggal</label>
                        <input type="date" id="tgl" class="form-control" name="tanggal" placeholder="Masukan Tanggal">
                      </div>  

                      <div class="form-group">
                          <label for="deskripsi">Deskripsi Acara</label>
                          <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"
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
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    {{-- Modal edit --}}
    <div class="modal fade" id="edit-data" tabindex="-1" role="dialog" 
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Jadwal Acara</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body">
                <div class="form-group">
                  <label for="tgl">Tanggal</label>
                  <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Masukan tgl">
                </div>                         
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Simpan</button>
              </div>
          </form>
      </div>
    </div>
    {{-- Akhir Modal Tambah --}}

    <div class="table-responsive p-3">
      <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>

{{-- Modal edit --}}
<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Jadwal Puskesmas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <div class="form-group">
              <label for="tgl">Tanggal</label>
              <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Masukan tgl">
            </div>                         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- Akhir Modal edit --}}
@endsection