@extends('layout.aplikasi')
@section('container')
    <div class="">
        <h1>{{ $judul }}</h1>
        
        <ul>
            <li>Nama:{{ $data['nama'] }}</li>
            <li>Email:{{ $data['kontak']['email'] }} </li>
            <li>nomor hp:{{ $data['kontak']['nomor_hp'] }} </li>
        </ul>
    </div>
@endsection