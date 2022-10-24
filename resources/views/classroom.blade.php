{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Class')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    {{-- buat tabel untuk list --}}
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Action</th>
                {{-- <th>Students</th>
                <th>Homeroom Teacher</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($classlist as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="class{{ $item->id }}">Detail</a></td>
                    {{-- <td> --}}
                    {{-- buat foreach lagi karena data terlalu banyak --}}
                    {{-- @foreach ($item->students as $data) --}}
                    {{-- bisa dalam bentuk [array] dan -> --}}
                    {{-- - {{ $data['name'] }} <br> --}}
                    {{-- - {{ $item->name }} <br> --}}
                    {{-- @endforeach
                    </td> --}}
                    {{-- NAMA ITEM/DATA PERHATIKAN FOREACH, JIKA MENGGUNAKAN FOREACH PASTIKAN NAMA VARIABEL DIDALAMNYA
                        YANG DIGUNAKAN BEDA LAGI AGAR TIDAK TURUN MENURUN KE BAWAH TAMPUNGAN VARIABELNYA --}}
                    {{-- <td> --}}
                    {{-- homeroomTeacher => nama relasi dari model class (perhatikan cara buatnya) --}}
                    {{-- {{ $item->homeroomTeacher->name }} <br>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
