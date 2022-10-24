{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Student')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Student</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Action</th>
                    {{-- <th scope="col">Class Id</th>
                    <th scope="col">Class</th>
                    <th scope="col">Extracurricullar</th>
                    <th scope="col">Homeroom Teacher</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($studentlist as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->nis }}</td>
                        {{-- karena mencari dengan sesuai id, jadi perlu ditambahkan seperti dibawah ini --}}
                        <td><a href="student{{ $item->id }}">Detail</a></td>

                        {{-- <td>{{ $item->class_id }}</td>
                        <td>{{ $item->class['name'] }}</td> --}}
                        {{-- panggil nama class dengan menambah relasi pada model dan tampilan disini --}}
                        {{-- <td> --}}
                        {{-- membuat agar perulangan nama dari ekskul --}}
                        {{-- @foreach ($item->extracurricullars as $data)
                                - {{ $data->name }} <br>
                            @endforeach
                        </td>
                        <td> --}}
                        {{-- arti dibawah ini => mengambil item yang ada di relasi class, kemudian di relasi homeroomTeacher
                                dan tampilkan name nya --}}
                        {{-- singkatnya NESTED RELATIONS => mengambil nama dari relasi homeroomTeacher yang berelasi dengan class
                                    yang berelasi dengan student --}}
                        {{-- {{ $item->class->homeroomTeacher->name }} --}}
                        {{-- </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- untuk membuat halaman cepat dimuat (clockwork) dan lebih rapi, bisa menggunakan halaman detail --}}
@endsection
