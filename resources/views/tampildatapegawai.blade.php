@extends('layout.admin')


@section('content')
<body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

            <div class="card">
                <div class="card-body">
                    <form action = "/updatedata/{{ $data->id }}" method = "POST" enctype="multipard/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap</label>
                          <input type="test" name = "nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select name = "jeniskelamin" class="custom-select">
                                <option selected>{{ $data->jeniskelamin }}</option>
                                <option value="laki laki">laki laki</option>
                                <option value="perempuan">perempuan</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">No Telpon</label>
                            <input name = "notelpon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{ $data->notelpon  }}">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
@endsection
