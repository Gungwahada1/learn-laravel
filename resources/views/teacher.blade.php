{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Teacher')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Teacher</h1>

    <div class="table-responsive">
        <table
            class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($teacherList as $item)
                    <tr class="table-primary">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td><a href="#">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
