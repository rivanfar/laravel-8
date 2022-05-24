@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>UTS PEMROGRAMAN WEB</h1>
                    <td>MUHAMMAD DENNI ANDRIAN - 20200801365</td>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>NO</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Jenis_Kelamin</th>
                            <th>Prodi</th>
                            <th>Pendidikan</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $dataDosen)
                            <tr>
                                <td>{{ $dataDosen->ID }}</td>
                                <td>{{ $dataDosen->NIDN }}</td>
                                <td>{{ $dataDosen->Nama }}</td>
                                <td>{{ $dataDosen->Jenis_Kelamin }}</td>
                                <td>{{ $dataDosen->Prodi }}</td>
                                <td>{{ $dataDosen->Pendidikan }}</td>
                                <td>
                                    <a href="{{ url('/show/' . $dataDosen->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url('/destroy/' . $dataDosen->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Dosen </a>
                </div>

            </div>
        </div>
    </section>
@endsection
