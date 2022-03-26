<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\List_Bunga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data['title'] = 'Home';
        // $data['menu'] = 1;
        // $data['user'] = Auth::user();
        $data['prod'] = Flower::wherein('kategori',['prod_img','prod_title'])->get();
        $data['bull1'] = Flower::wherein('kategori',['icon1','title'])->first();
        $data['bull2'] = Flower::wherein('kategori',['icon2','title'])->first();
        $data['bull3'] = Flower::wherein('kategori',['icon3','title','keterangan'])->first();
        $data['bull4'] = Flower::wherein('kategori',['icon4','title'])->first();
        $data['bull5'] = Flower::wherein('kategori',['icon5','title'])->first();
        $data['bull6'] = Flower::wherein('kategori',['icon6','title'])->first();
        $data['new'] = Flower::where('kategori','new')->first();
        $data['promo'] = Flower::where('kategori','promo')->first();
        $data['thumb'] = Flower::wherein('kategori',['thumb','new_prod_box'])->get();
        $data['bhs'] = Flower::where('kategori','bendera')->orderBy('bahasa','desc')->get();
        $data['cart'] = Flower::wherein('kategori',['cart','title'])->first();
        $data['about'] = Flower::where('kategori','about',)->first();
        $data['lis1'] = List_Bunga::where('kat_list','l1',)->get();
        $data['lis2'] = List_Bunga::where('kat_list','l2',)->get();

        // dd($data['lis1']);
        $data['lb'] = List_Bunga::all();
        return view('home.index', $data);
    }
}
