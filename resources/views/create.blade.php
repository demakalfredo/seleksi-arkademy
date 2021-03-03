@extends('layouts.master')

@section('title')
  Demak Alfredo
@endsection

@section('content')
  <h1>Selamat Datang di Halaman Create</h1>


  <form action="/" method="post">
    <label for="">Nama Produk</label><br>
    <input type="text" name="nama_produk" value="{{old('nama_produk')}}"><br><br>

    <label for="">Keterangan</label><br>
    <textarea name="keterangan" rows="8" cols="80" >{{old('keterangan')}}</textarea><br><br>

    <label for="">Harga</label><br>
    <input type="text" name="harga" value="{{old('harga')}}">
    @if ($errors->has('harga'))
      <p>Harga hanya bisa dimasukkan angka</p>
    @endif
    <br><br>
    <label for="">Jumlah</label><br>
    <input type="text" name="jumlah" value="{{old('jumlah')}}">
    @if ($errors->has('jumlah'))
      <p>Harga hanya bisa dimasukkan angka</p>
    @endif
    <br><br>
    <input type="submit" name="" value="create">
    {{ csrf_field() }}
  </form>
@endsection
