@extends('layouts.master')

@section('title')
  Demak Alfredo
@endsection

@section('content')
<h1>Daftar Produk</h1>
<hr>
@foreach ($produks as $produk)
  <li>
    <a href="/home/{{$produk->id}}">{{$produk->nama_produk}}</a>
    <p>Keterangan : {{$produk->keterangan}}</p>
    <p>Harga : {{$produk->harga}}</p>
    <div class="">
    <form action="/home/{{$produk->id}}" method="post" style="display:inline">
      <input type="submit" name="submit" value="Delete">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
    </form>
    <form action="/home/{{$produk->id}}/edit" style="display:inline">
      <input type="submit" name="submit" value="Edit">
    </form>
    </div>
    <hr>
  </li>
@endforeach
{!! $produks->links() !!}
@endsection
