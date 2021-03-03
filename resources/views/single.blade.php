@extends('layouts.master')

@section('title')
  Demak Alfredo
@endsection

@section('content')
  <h1>Selamat Datang di Halaman Produk</h1>
  <h2>{{$produks->nama_produk}}</h2>
  <hr>
  <p>
    {{$produks->keterangan}}
  </p>
  <hr>
  <p>
    {{$produks->harga}}
  </p>
  <hr>
  <p>
    {{$produks->jumlah}}
  </p>
@endsection
