@extends('layouts.global')

@section('title')
    Ini adalah halaman Mahasiswa
@endsection

@section('content')
    <div class="container px-4 py-5">
        <a href="{{route('mahasiswa.create')}}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <th scope="row">{{ $mahasiswa->id }}</th>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi->nama }}</td>
                        <td>
                            <a href="{{route('mahasiswa.show',$mahasiswa->id)}}" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>
                        </td>
                        {{-- Cukup Panggil seperti di atas --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection