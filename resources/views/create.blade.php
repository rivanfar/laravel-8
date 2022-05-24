@extends('layouts.default')
@section('content')
    <section>
        <div class="container mt-5">
            <h1>Form Tambah Dosen</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">NIDN*</label>
                            <input type="number" name="NIDN" class="form-control" placeholder="12345678">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama Dosen*</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Robert Einstein">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Jenis Kelamin*</label>
                            <input type="text" name="Jenis Kelamin" class="form-control" placeholder="Laki-laki/Perempuan">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Prodi</label>
                            <input type="text" name="Prodi" class="form-control" placeholder="Teknik Informatika">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Pendidikan</label>
                            <input type="text" name="Pendidikan" class="form-control" placeholder="S1">
                        </div>

                        <div class="form-group mt-2">
                            <button type="Submit" class="btn btn-primary">SUBMIT</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}">
                                << Kembali Ke Halaman Utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
