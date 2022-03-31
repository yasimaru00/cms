@extends('layout.app')
@section('content')

<div class="center_content">
  <div class="left_content">
    <div class="title"><span class="title_icon"><img src="{{$bull1->icon}}" alt="" /></span>Register</div>
    <div class="feat_prod_box_details">
      <p class="details">{{$about->keterangan}}</p>
      <div class="contact_form">
        <div class="form_subtitle">create new account</div>
        <form name="register" href="" method="post" action="{{route('register.store')}}">
          @csrf
          <div class="form_row">
            <label for="name" class="contact"><strong>Name:</strong></label>
            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form_row">
            <label for="email" class="contact"><strong>Email:</strong></label>
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form_row">
            <label  for="phone_number" class="contact"><strong>Phone:</strong></label>
            <input id="phone_number" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
              @error('phone_number')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form_row">
            <label for="company" class="contact"><strong>Company:</strong></label>
             <input id="company" type="company" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company">
              @error('company')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form_row">
            <label for="address" class="contact"><strong>Adrres:</strong></label>
             <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form_row">
            <div class="terms">
              <input type="checkbox" name="terms" />
              I agree to the <a href="#">terms &amp; conditions</a>
            </div>
          </div>
          <div class="form_row">
            <input type="submit" class="register" value="register" />
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