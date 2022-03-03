@extends('layout.app')

@section('content')

  <div class="center_content">
    <div class="left_content">
      <div class="crumb_nav"> <a href="#">home</a> &gt;&gt; category name </div>
      <div class="title"><span class="title_icon"><img src="{{asset('assets/images/bullet1.gif')}}" alt="" /></span>Category products</div>
      <div class="new_products">
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/new_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="#">2</a><a href="#">3</a>�<a href="#">10</a><a href="#">11</a><a href="#">>></a> </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="languages_box"> <span class="red">Languages:</span> <a href="#"><img src="{{asset('assets/images/gb.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('assets/images/fr.gif')}}" alt="" border="0" /></a> <a href="#"><img src="{{asset('assets/images/de.gif')}}" alt="" border="0" /></a> </div>
      <div class="currency"> <span class="red">Currency: </span> <a href="#">GBP</a> <a href="#">EUR</a> <a href="#"><strong>USD</strong></a> </div>
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="{{asset('assets/images/cart.gif')}}" alt="" /></span>My cart</div>
        <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
        <a href="#" class="view_cart">view cart</a> </div>
      <div class="title"><span class="title_icon"><img src="{{asset('assets/images/bullet3.gif')}}" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="{{asset('assets/images/about.gif')}}" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="{{asset('assets/images/bullet4.gif')}}" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb1.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb2.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="{{asset('assets/images/promo_icon.gif')}}" alt="" /></span> <a href="#"><img src="{{asset('assets/images/thumb3.gif')}}" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="{{asset('assets/images/bullet5.gif')}}" alt="" /></span>Categories</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
        </ul>
        <div class="title"><span class="title_icon"><img src="{{asset('assets/images/bullet6.gif')}}" alt="" /></span>Partners</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>
  <!--end of center content-->
  @endsection
