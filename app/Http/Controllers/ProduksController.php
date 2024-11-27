<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduksController extends Controller
{
     public function index()
    {
        $produk = DB::table('tbl_produk')->get();
        
        return view('/home', ['produk' => $produk]);
    }

    public function shop()
    {
        $produk = DB::table('tbl_produk')->get();
        
        return view('/shop', ['produk' => $produk]);
    }

    public function detail($id)
    {
        $produk = DB::table('tbl_produk')->where('id_produk', $id)->first();

        if ($produk) {
            return view('shop-detail', ['produk' => $produk]);
        }
        return redirect('/shop')->with('error', 'Produk tidak ditemukan.');
    }

}
