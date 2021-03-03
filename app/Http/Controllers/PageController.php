<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
      // Page::create([
      //   'nama_produk' => 'Sepeda',
      //   'keterangan' => 'Sepeda Gunung',
      //   'harga' => 1000000,
      //   'jumlah' => 24,
      // ]);

      // Page::find(4)->update([
      //   'nama_produk' => 'Buku Biologi',
      //   'keterangan' => 'Untuk kelas 2 SMP'
      // ]);
      //
      // Page::destroy(8);

      $produks= Page::simplepaginate(3);
      return view("home", ['produks' => $produks]);
    }

    public function show($id)
    {
      // DB::table('produk')->insert([
      //   ['nama_produk'=>'Buku Kimia','keterangan'=>'Untuk kelas 2 SMA','harga'=>50000,'jumlah'=>12]
      // ]);
      //
      // DB::table('produk')->where('nama_produk','Buku Matematika')->update([
      //   'nama_produk' => 'Buka Matematika dan Ilmu Alam'
      // ]);
      //
      // DB::table('produk')->where('nama_produk','Buka Matematika dan Ilmu Alam')->delete();
      //
      // $produks = DB::table('produk')->get();

      $produks = Page::find($id);
      if(!$produks){
        return 'Id tidak ada dalam Dataase';
      }

      return view("single", ['produks' => $produks]);
    }

    public function create(){
      return view("create");
    }

    public function store (Request $request){
      $this->validate($request, [
        'harga' => 'numeric',
        'jumlah' => 'numeric'
      ]);

      $produks = new Page;
      $produks->nama_produk = $request->nama_produk;
      $produks->keterangan = $request->keterangan;
      $produks->jumlah = $request->jumlah;
      $produks->harga = $request->harga;
      $produks->save();
      return redirect('/home');
    }

    public function edit($id)
    {
      $produks = Page::find($id);
      if(!$produks){
        return 'Id tidak ada dalam Dataase';
      }

      return view("edit", ['produks' => $produks]);
    }

    public function update(Request $request, $id){
      $this->validate($request, [
        'harga' => 'numeric',
        'jumlah' => 'numeric'
      ]);

      $produks = Page::find($id);
      $produks->nama_produk = $request->nama_produk;
      $produks->keterangan = $request->keterangan;
      $produks->harga = $request->harga;
      $produks->jumlah = $request->jumlah;
      $produks->save();

      return redirect('home/'.$id);
    }

    public function destroy($id){
      $produks = Page::find($id);
      $produks->delete();
      return redirect('home');
    }
}
