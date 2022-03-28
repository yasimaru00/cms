@extends('layout.app')
@section('content')
<div class="center_content">
    <div class="left_content">
        <div class="title"><span class="title_icon"><img src="{{ $bull1->icon }}" alt="" /></span>Special
            gifts</div>
        <div class="feat_prod_box">
            @foreach ($prod as $p)
            <div class="prod_img"><a href="#"><img src="{{ $p->img_flower }}" alt="" border="0" /></a></div>
            <div class="prod_det_box"> <span class="special_icon"><img src="{{ $special->label }}" alt="" /></span>
                <div class="box_top"></div>
                <div class="box_center">
                    <div class="prod_title">{{ $p->prod_title }}</div>
                    <p class="details">{{ $p->keterangan }}</p>
                    <a href="#" class="more">- more details -</a>
                    <div class="clear"></div>
                </div>
                <div class="box_bottom"></div>
            </div>
            <div class="clear"></div>
            @endforeach
        </div>
        <div class="feat_prod_box">
            @foreach ($prod as $p)
            <div class="prod_img"><a href="#"><img src="{{ $p->img_flower }}" alt="" border="0" /></a></div>
            <div class="prod_det_box"> <span class="special_icon"><img src="{{ $special->label }}" alt="" /></span>
                <div class="box_top"></div>
                <div class="box_center">
                    <div class="prod_title">{{ $p->prod_title }}</div>
                    <p class="details">{{ $p->keterangan }}</p>
                    <a href="#" class="more">- more details -</a>
                    <div class="clear"></div>
                </div>
                <div class="box_bottom"></div>
            </div>
            <div class="clear"></div>
            @endforeach
        </div>

        <div class="pagination"> <span class="disabled">
                << </span><span class="current">1</span><a href="#">2</a><a href="#">3</a>�<a href="#">10</a><a href="#">11</a><a href="#">>></a> </div>
        <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
        <div class="languages_box"> <span class="red">Languages:</span>
            @foreach ($bhs as $bhs)
            <a href="#" class=""><img src="{{ $bhs->bahasa }}" alt="" border="0" /></a>
            @endforeach
        </div>
        <div class="currency"> <span class="red">Currency: </span> <a href="#">GBP</a> <a href="#">EUR</a>
            <a href="#" class="selected">USD</a>
        </div>
        <div class="cart">
            <div class="title"><span class="title_icon"><img src="{{ $cart->icon }}" alt="" /></span>{{ $cart->title }}</div>
            <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
            <a href="cart.html" class="view_cart">view cart</a>
        </div>
        <div class="title"><span class="title_icon"><img src="{{ $bull3->icon }}" alt="" /></span>{{ $bull3->title }}</div>
        <div class="about">
            <p> <img src="{{ $about->thumb }}" alt="" class="right" /> {{ $bull3->keterangan }}</p>
        </div>
        <div class="right_box">
            <div class="title"><span class="title_icon"><img src="{{ $bull4->icon }}" alt="" /></span>{{ $bull4->title }}</div>
            @foreach ($thumb as $t)
            <div class="new_prod_box"> <a href="#">{{ $t->new_prod_box }}</a>
                <div class="new_prod_bg"> <span class="new_icon"><img src="{{ $promo->label }}" alt="" /></span> <a href="#"><img src="{{ $t->thumb }}" alt="" class="thumb" border="0" /></a> </div>
            </div>
            @endforeach
        </div>
        <div class="right_box">
            <div class="title"><span class="title_icon"><img src="{{ $bull5->icon }}" alt="" /></span>{{ $bull5->title }}</div>
            <ul class="list">
                @foreach ($lis1 as $lis1)
                <li><a href="#">{{ $lis1->list1 }}</a></li>
                @endforeach
            </ul>
            <div class="title"><span class="title_icon"><img src="{{ $bull6->icon }}" alt="" /></span>{{ $bull6->title }}</div>
            <ul class="list">
                @foreach ($lis2 as $lis2)
                <li><a href="#">{{ $lis2->list2 }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
</div>
<!--end of center content-->
@endsection