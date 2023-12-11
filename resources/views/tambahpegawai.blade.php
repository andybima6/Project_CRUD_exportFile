@extends('layout.admin')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-5 mt-5">Tambah Data Pegawai</h1>

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="insertpegawai" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                                @error('tanggal_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <select name="jeniskelamin" class="custom-select">
                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                    <option value="laki laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <select name="id_religion" class="custom-select">
                                    <option selected disabled>Pilih Agama</option>
                                    @foreach ($dataagama as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">No Telpon</label>
                                <input name="notelpon" type="text" class="form-control">
                                @error('notelpon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="exampleInputEmail1">Masukkan Foto</label>
                                <input type="file" name="foto" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
