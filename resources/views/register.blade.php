<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logopgri.png" rel="icon">
    <title>Register</title>

    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{url('vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
</head>

<body>

    <form id="formregister" action="{{url('registerAnggotaPost')}}" method="POST" role="form">
        @csrf
        <h1>Sign up</h1><br />

        <span class="input"></span>
        <input type="text" name="nama_anggota" placeholder="Nama Anggota" autofocus autocomplete="off" />
        <span class="input"></span>
        <input type="username" name="username" placeholder="username" required />
        <span class="input"></span>
        <input type="password" name="password" id="password" placeholder="Password" />
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="jk1" name="jk" class="custom-control-input" value="laki-laki">
            <label class="custom-control-label" for="jk1">Laki - Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="jk2" name="jk" class="custom-control-input" value="perempuan">
            <label class="custom-control-label" for="jk2">Perempuan</label>
        </div>
        <div>
        <button type="submit" value="Daftar" class="icon-arrow-right"><span>Daftar</span></button>
   </div>
    </form>



    <!-- <div>
    <form id="formregister" action="{{url('registerAnggotaPost')}}" method="POST" role="form">
                    @csrf
                    <div class="form">

                      <div class="form-group">
                          <label for="nama_anggota">Nama Anggota</label>
                          <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                           placeholder="Masukan Nama Anggota">
                      </div>

                      <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" id="username" class="form-control" name="username" placeholder="Masukan username">
                      </div>  

                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password"
                           placeholder="Masukan password">
                      </div>     
                      <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" id="jk">
                          <option value="Laki-laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>                  
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </form>
  </div> -->

</body>

</html>
