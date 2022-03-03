<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="{{asset('/assets/style.css')}}" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="{{asset('/assets/images/logo.gif')}}" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="{{url('/')}}">home</a></li>
        <li><a href="{{url('about')}}">about us</a></li>
        <li><a href="{{url('category')}}">flowers</a></li>
        <li><a href="{{url('specials')}}">specials gifts</a></li>
        <li><a href="{{url('myaccount')}}">my accout</a></li>
        <li><a href="{{url('register')}}">register</a></li>
        <li><a href="{{url('details')}}">prices</a></li>
        <li><a href="{{url('contact')}}">contact</a></li>
      </ul>
    </div>
  </div>
  @yield('content')
  <!--end of center content-->
  <div class="footer">
    <div class="left_footer"><img src="{{asset('/assets/images/footer_logo.gif')}}" alt="" /><br />
      <a href="http://csscreme.com"><img src="{{asset('/assets/images/csscreme.gif')}}" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about us</a> <a href="#">services</a> <a href="#">privacy policy</a> <a href="#">contact us</a> </div>
  </div>
</div>
</body>
</html>
