<?php

namespace App\Http\Controllers;
use App;
use App\Models\Produk;
use App\Models\Provinsi;
use Config;

class HomeController extends Controller{



    function showaccount(){
        return view('frontview.account');
    }

    function showcart(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(3)->get();
        return view('frontview.cart', $data);
    }

    function showcheckout(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(3)->get();
        return view('frontview.checkout', $data);
    }

    function showdetail(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(3)->get();
        return view('frontview.detail', $data);
    }

    function showindex(){
        $data['list_produk'] = Produk::all();
        return view('frontview.index', $data);
    }

  
    function showproduk1(){
        return view('frontview.produk1');
    }

    function showshop(){
        $data['list_produk'] = Produk::orderby('id', 'DESC')->take(3)->get();
        return view('frontview.shop', $data);

    }

    function showwhislist(){
        return view('frontview.whislist');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

 
    function showproduk2(){
        return view('backview.produk2');
    }

    function showpromo(){
        return view('backview.promo');
    }

   
    function showsupplier(){
        return view('backview.supplier');
    }

    function showuser(){
        return view('backview.user');
    }

 
    function showalamat(){
        $data['list_provinsi'] = Provinsi::all();
        return view('frontview.alamat', $data);
    }

   

  
}