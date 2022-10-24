{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Extracurricullar')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Ekstrakurikuler</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
                {{-- <th scope="col">Anggota</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="extracurricullar/{{ $item->id }}">Detail</a></td>
                    {{-- <td> --}}
                    {{-- perulangan disini menampilkan data yang dikaitkan dengan nama relation,
                            jadi students diambil dari nama relasi dengan tabel students --}}
                    {{-- @foreach ($item->students as $item)
                            - {{ $item->name }} <br>
                        @endforeach
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
