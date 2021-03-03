@extends('layouts.master')

@section('title')
  Demak Alfredo
@endsection

@section('content')
  <h1>Selamat Datang di Halaman Edit</h1>

  <form action="/home/{{$produks->id}}" method="post">
    <label for="">Nama Produk</label><br>
    <input type="text" name="nama_produk" value="{{$produks->nama_produk}}"><br><br>

    <label for="">Keterangan</label><br>
    <textarea name="keterangan" rows="8" cols="80">{{$produks->keterangan}}</textarea><br><br>

    <label for="">Harga</label><br>
    <input type="text" name="harga" value="{{$produks->harga}}">
    @if ($errors->has('harga'))
      <p>Harga hanya bisa dimasukkan angka</p>
    @endif
    <br><br>

    <label for="">jumlah</label><br>
    <input type="text" name="jumlah" value="{{$produks->jumlah}}">
    @if ($errors->has('jumlah'))
      <p>Jumlah hanya bisa dimasukkan angka</p>
    @endif
    <input type="submit" name="" value="edit">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection
