<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Flower;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flower::create([
            'nm_flower' => 'prod1',
            'img_flower' => url('/assets/images/prod1.gif'),
            'title' => '',
            'prod_title' => 'Product name',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
            'kategori' => 'prod_img',
            'icon' => '',
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'prod2',
            'img_flower' => url('/assets/images/prod2.gif'),
            'title' => '',
            'prod_title' => 'Product name',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
            'kategori' => 'prod_img',
            'icon' => '',
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'thumb1',
            'img_flower' => url('/assets/images/new_icon.gif'),
            'new_prod_box' => 'product name',
            'kategori' => 'thumb',
            'thumb' => url('/assets/images/thumb1.gif'),

        ]);
        Flower::create([
            'nm_flower' => 'thumb2',
            'new_prod_box' => 'product name',
            'icon' => url('/assets/images/promo_icon.gif'),
            'label' => url('/assets/images/new_icon.gif'),
            'kategori' => 'thumb',
            'thumb' => url('/assets/images/thumb2.gif'),
        ]);
        Flower::create([
            'nm_flower' => 'thumb3',
            'new_prod_box' => 'product name',
            'kategori' => 'thumb',
            'label' => url('/assets/images/promo_icon.gif'),
            'thumb' => url('/assets/images/thumb3.gif'),

        ]);
        Flower::create([
            'nm_flower' => 'about',
            'kategori' => 'about',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
            'thumb' => asset('/assets/images/about.gif'),
        ]);

        Flower::create([
            'nm_flower' => 'new_icon',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'new',
            'icon' => '',
            'label' => url('/assets/images/new_icon.gif'),
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'promo_icon',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'promo',
            'icon' => '',
            'label' => url('/assets/images/promo_icon.gif'),
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'special_icon',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'special',
            'icon' => '',
            'label' => url('/assets/images/special_icon.gif'),
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet1',
            'img_flower' => '',
            'title' => 'Featured products',
            'keterangan' => '',
            'kategori' => 'icon1',
            'icon' => url('assets/images/bullet1.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet2',
            'img_flower' => '',
            'title' => 'New products',
            'keterangan' => '',
            'kategori' => 'icon2',
            'icon' => url('assets/images/bullet2.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet3',
            'img_flower' => '',
            'title' => 'About Our Shop',
            'keterangan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
            'kategori' => 'icon3',
            'icon' => url('assets/images/bullet3.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet4',
            'img_flower' => '',
            'title' => 'Promotions',
            'keterangan' => '',
            'kategori' => 'icon4',
            'icon' => url('assets/images/bullet4.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet5',
            'img_flower' => '',
            'title' => 'Categories',
            'keterangan' => '',
            'kategori' => 'icon5',
            'icon' => url('assets/images/bullet5.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'bullet6',
            'img_flower' => '',
            'title' => 'Partners',
            'keterangan' => '',
            'kategori' => 'icon6',
            'icon' => url('assets/images/bullet6.gif'),
            'label' => '',
            //
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'de',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'bendera',
            'icon' => '',
            'label' => '',
            'bahasa' => url('/assets/images/de.gif'),
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'fr',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'bendera',
            'icon' => '',
            'label' => '',
            'bahasa' => url('/assets/images/fr.gif'),
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'gb',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'bendera',
            'icon' => '',
            'label' => '',
            'bahasa' => url('/assets/images/gb.gif'),
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'cart',
            'img_flower' => '',
            'title' => 'My cart',
            'keterangan' => '',
            'kategori' => 'cart',
            'icon' => url('/assets/images/cart.gif'),
            'label' => '',
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'big_pic',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'big_pic',
            'icon' => url('/assets/images/big_pic.jpg'),
            'label' => '',
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'zoom',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'zoom',   
            // 'icon' => url('/assets/images/zoom.gif'),
            'label' => url('/assets/images/zoom.gif'),
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'order_now',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'order_now',   
            'icon' => url('/assets/images/order_now.gif'),
            // 'label' => url('/assets/images/zoom.gif'),
            'color' => '',
        ]);
        Flower::create([
            'nm_flower' => 'color11',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'color',   
            'color' => url('/assets/images/color1.gif'),
        ]);
        Flower::create([
            'nm_flower' => 'color12',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'color',   
            'color' => url('/assets/images/color2.gif'),
        ]);
        Flower::create([
            'nm_flower' => 'color13',
            'img_flower' => '',
            'title' => '',
            'keterangan' => '',
            'kategori' => 'color',   
            'color' => url('/assets/images/color3.gif'),
        ]);
        
    }
}
