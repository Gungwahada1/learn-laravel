{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Student')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Detail Student</h1>

    <h3 class="pt-4">Nama Student : {{ $student->name }}</h3>
    <div class="table-responsive">
        <table
            class="table table-striped
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 25%">NIS</th>
                    <th style="width: 25%">Gender</th>
                    <th style="width: 25%">Class</th>
                    <th style="width: 25%">Homeroom Teacher</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr class="table-primary">
                    <td scope="row">{{ $student->nis }}</td>
                    <td>
                        @if ($student->gender == 'P')
                            Perempuan
                        @else
                            Laki-laki
                        @endif
                    </td>
                    <td>{{ $student->class->name }}</td>
                    <td>{{ $student->class->homeroomTeacher->name }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h5 class="mt-5">Extracurricullar yang diikuti :</h5>
    <ol class="list-group list-group-numbered">
        @foreach ($student->extracurricullars as $item)
            <li class="list-group-item">
                {{ $item->name }}
            </li>
        @endforeach
    </ol>
@endsection
