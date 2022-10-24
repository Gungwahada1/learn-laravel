{{-- untuk mengambil data dari layout.main --}}
@extends('layout.main')

{{-- untuk membuat nama section --}}
@section('title', 'Classroom Detail')

{{-- untuk membuat konten section --}}
@section('content')
    <h1>Ini Halaman Detail Class</h1>

    <h3 class="pt-4">Nama Class : {{ $classlist->name }}</h3>
    <div class="table-responsive">

    @endsection
