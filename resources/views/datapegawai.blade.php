@extends('layout.admin')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard v2</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <a href = "/tambahpegawai" type="button" class="btn btn-success mb-2">Tambah Data +</a>

            <div class="row g-3 align-items-center mt-2 mb-2">
                <div class="col-auto">
                    <form action="/pegawai" method="GET">
                        <input type = "search" id="inputPassword6" name="search" class="form-control"
                            aria-describedby="passwordHelpInLine">
                    </form>
                </div>

                <div class="col-auto">
                    <a href = "/exportpdf" type="button" class="btn btn-info mb-2">Export File +</a>
                </div>

            </div>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">No Telpon</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <img src="{{ asset('fotopegawai/' . $row->foto) }}" alt=""
                                        style = "width:40px;">
                                </td>
                                <td>{{ $row->jeniskelamin }}</td>
                                <td>{{ $row->notelpon }}</td>
                                <td>{{ $row->created_at->format('D M Y') }}</td>
                                <td>
                                    <a href = "/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                                    <a href = "#"type="button" class="btn btn-danger delete"
                                        data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                var pegawaiid = $(this).data('id');
                var nama = $(this).data('nama');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover these imaginary files. Are you sure to delete the data with id " +
                        nama + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedata/" + pegawaiid + "";
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            });
        });
    </script>
@endsection
