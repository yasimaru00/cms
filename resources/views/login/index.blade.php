@extends('layout.app')
@section('content')

<div class="center_content">
  <div class="left_content">
    <div class="title"><span class="title_icon"><img src="{{$bull1->icon}}" alt="" /></span>My account</div>
    <div class="feat_prod_box_details">
      <p class="details"> {{$about->keterangan}}</p>
      <div class="contact_form">
        <div class="form_subtitle">login into your account</div>
        <form name="login" href="" method="post" action="{{route('login.store')}}">
        @csrf
          <div class="form_row">
            <label for="username" class="contact"><strong>Username:</strong></label>
            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form_row">
            <label for="password" class="contact"><strong>Password:</strong></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form_row">
            <div class="terms">
              <input type="checkbox" name="terms" />
              Remember me
            </div>
          </div>
          <div class="form_row">
            <input type="submit" class="login" value="login" />
          </div>
        </form>
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

@endsection