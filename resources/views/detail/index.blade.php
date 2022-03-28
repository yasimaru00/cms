@extends('layout.app')
  
@section('content')
  <style>
    #tab2:target {
      display: block;
    }
  </style>
  <div class="center_content">
    <div class="left_content">
      <div class="crumb_nav"> <a href="#">home</a> &gt;&gt; product name </div>
      <div class="title"><span class="title_icon"><img src="{{$bull1->icon}}" alt="" /></span>Product name</div>
      <div class="feat_prod_box_details">
        <div class="prod_img"><a href="#"><img src="{{$prod[0]->img_flower}}" alt="" border="0" /></a> <br />
          <br />
          <a href="{{$big->icon}}" rel="lightbox"><img src="{{$zom->label}}" alt="" border="0" /></a> </div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Details</div>
            <p class="details">{{$prod[0]->keterangan}}<br />
             {{$prod[0]->keterangan}}</p>
            <div class="price"><strong>PRICE:</strong> <span class="red">100 $</span></div>
            <div class="price"><strong>COLORS:</strong>
            @foreach($color as $col)
             <span class="colors"><img src="{{$col->color}}" alt="" border="0" /></span> 
            @endforeach 
            </div>
            <a href="#" class="more"><img src="{{$order->icon}}" alt="" border="0" /></a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div id="demo" class="demolayout">
        <ul id="demo-nav" class="demolayout">
          <li><a class="active" href="#tab1">More details</a></li>
          <li><a class="" href="#tab2">Related Products</a></li>
        </ul>
        <div class="tabs-container">
          <div style="display: block;" class="tab" id="tab1">
            <p class="more_details">{{$prod[0]->keterangan}}</p>
            <ul class="list">
              @foreach($lis as $li)
              <li><a href="#">{{$li->list1}}</a></li>
              @endforeach
            </ul>
            <p class="more_details">{{$prod[0]->keterangan}}</p>
          </div>
          <div style="display: none;" class="tab" id="tab2">
          @foreach($thumb as $th)
            <div class="new_prod_box"> <a href="#">{{$th->new_prod_box}}</a>
              <div class="new_prod_bg"> <a href="#"><img src="{{$th->thumb}}" alt="" class="thumb" border="0" /></a> </div>
            </div>
            @endforeach
          @foreach($thumb as $th)
            <div class="new_prod_box"> <a href="#">{{$th->new_prod_box}}</a>
              <div class="new_prod_bg"> <a href="#"><img src="{{$th->thumb}}" alt="" class="thumb" border="0" /></a> </div>
            </div>
            @endforeach
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
    <div class="languages_box"> <span class="red">Languages:</span>
      @foreach ($bhs as $bhs)
      <a href="#" class=""><img src="{{ $bhs->bahasa }}" alt="" border="0" /></a>
      @endforeach
    </div>
    <div class="currency"> <span class="red">Currency: </span> <a href="#">GBP</a> <a href="#">EUR</a> <a href="#" class="selected">USD</a> </div>
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
  
<script type="text/javascript">
var tabber1 = new Yetii({
id: 'demo'
});

</script>
    
@endsection
