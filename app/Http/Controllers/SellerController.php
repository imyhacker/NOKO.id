<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Auth;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller()
    {
        $produk = Game::where('seller', Auth::user()->unique_account)->get();
        //$produk = Auth::user()->unique_account;
        //dd($produk);
        return view('Dashboard/Seller/jual', compact('produk'));
    }
    public function tambah_produk()
    {
        
        return view('Dashboard/Seller/tproduk');
    }
    public function upload_produk(Request $req)
    {
        $nama_akun = $req->input('nama_akun');
        $harga_jual = $req->input('harga_jual');
        $tipe_game = $req->input('tipe_game');
        $deskripsi = $req->input('deskripsi_akun');
        $image1 = $req->file('screenshot_pertama');
        $imagescrenshotpertama = $image1->getClientOriginalName();
        $image2 = $req->file('screenshot_kedua');
        $images2screnshotkedua = $image2->getClientOriginalName();
        $image3 = $req->file('screenshot_ketiga');
        $images3screnshotketiga = $image3->getClientOriginalName();
        $seller = Auth::user()->unique_account;
        $status = 0;
        $viewer = 0;
        $unique = rand(1, 9999999);

        $image1->move('s1', $imagescrenshotpertama);
        $image2->move('s2', $images2screnshotkedua);
        $image3->move('s3', $images3screnshotketiga);

        $data = Game::create([
            'nama_akun' => $nama_akun,
            'seller'    => $seller,
            'tipe_game' => $tipe_game,
            'harga_jual'=> $harga_jual,
            'screenshot_pertama' => $imagescrenshotpertama,
            'screenshot_kedua'   => $images2screnshotkedua,
            'screenshot_ketiga'  => $images3screnshotketiga,
            'deskripsi_akun'     => $deskripsi,
            'viewer'             => $viewer,
            'status'             => $status,
            'unique_num'         => $unique,
        ]);
        return redirect()->back()->with('success', 'Berhasil Upload Produk!');
    }
}
