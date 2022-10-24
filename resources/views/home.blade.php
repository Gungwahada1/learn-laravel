{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Home')

{{-- untuk membuat konten section --}}
@section('content')
    <main>
        <h1>Halo {{ $name }} | Anda adalah {{ $role }}</h1>
        <h1>Ini Halaman Home</h1>

        {{-- make if statement --}}
        {{-- @if ($role == 'admin')
                <a href="#">Ke halaman Admin</a>
            @else
                <a href="#">Ke halaman Staff</a>
            @endif --}}

        {{-- make switch case statement --}}
        {{-- @switch($role)
                @case('admin')
                    <a href="#">Ke halaman Admin</a>
                @break

                @case('staff')
                    <a href="#">Ke halaman Staff</a>
                @break

                @default
                    <a href="#">Ke halaman Terserah</a>
            @endswitch --}}

        {{-- make iteration with for loop --}}
        {{-- @for ($i = 0; $i < 5; $i++)
                {{ $i }} <br>
            @endfor --}}

        {{-- make iteration with foreach --}}
        {{-- @foreach ($buah as $data)
                {{ $data }} <br>
            @endforeach --}}

        {{-- <table class="table table-light">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buah as $data)
                    <tr> --}}
        {{-- loop->iteration make iteration first is number 1, index make iteration first is number 0 --}}
        {{-- <td>{{ $loop->iteration }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </main>
@endsection
