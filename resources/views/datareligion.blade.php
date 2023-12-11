@extends('layout.admin')

@push('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Religion</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Data Religion</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <a href = "/tambahagama" type="button" class="btn btn-success mb-2">Tambah agama +</a>
            {{-- {{ Session::get('halaman_url') }} --}}

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
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>

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

                            </tr>
                        @endforeach


                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
    </div>
@endsection

