<!DOCTYPE html>
<html lang="en" >


      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  
          <title>Buy it | Sign</title>
  
          <!-- Google font -->
          <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <!-- Font Awesome Icon -->
          <link rel="stylesheet" href="{{asset('customer/css/font-awesome.min.css')}}">
  
          <!-- Custom stlylesheet -->
          <link type="text/css" rel="stylesheet" href="{{asset('customer/css/styleS.css')}}"/>
      </head>
</head>

<body>
  <header>
                <!-- TOP HEADER -->
                <div id="top-header">
                    
                </div>
                <!-- /TOP HEADER -->
                   <!-- LOGO -->
                   <center>
                   <div class="col-md-2">
                      <div class="header-logo">
                          <a href="{{url('/home')}}" class="logo">
                                  <img src="customer/img/logo.png" alt="">
                          </a>
                      </div>
                  </div>
                </center>
                <!-- TOP HEADER -->
                <div id="top-header">
                    
                  </div>
                  <!-- /TOP HEADER -->
          
        </header>                
                            <div class="cont">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                            <div class="form sign-in">
                                                  <h2>Welcome back,</h2>
                                                       <label>
                                                            <input type="text" name="email" id="email"  placeholder="Email" >
                                                       </label>
                                                       @if ($errors->has('email'))
                                                       <span class="help-block">
                                                           <strong>{{ $errors->first('email') }}</strong>
                                                       </span>
                                                   @endif
                                                       <label>
                                                            <input type="password" name =" password" id="password"  placeholder="Password" >
                                                       </label>
                                                       
                                                       @if ($errors->has('password'))
                                                       <span class="help-block">
                                                           <strong>{{ $errors->first('password') }}</strong>
                                                       </span>
                                                   @endif
                                                          <div class="forgot-pass"> 
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        Forgot Your Password?
                                                                 </a>
                                                          </div>  
                                                       
                                                     <button type="submit" class="submit">Sign In</button>
                                                     <center>
                                                     <strong> Sign in with:   </strong>  
                                                     <a href="{{ url('/auth/facebook') }}" class="fa fa-facebook"></a>
                                                     <a href="{{ url('/auth/twitter') }}" class="fa fa-twitter"></a>
                                                     <a  href="{{ url('/auth/google') }}" class="fa fa-google-plus"></a>
                                                     </center>
                                                </div>
                                    </form> 
                         <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                               {{ csrf_field() }}
                              <div class="sub-cont">
                                     <div class="img">
                           <div class="img__text m--up">
                                <h2>New here?</h2>
                                <p>Sign up and discover great amount of new opportunities!</p>
                              </div>
                              <div class="img__text m--in">
                                <h2>One of us?</h2>
                                <p>If you already has an account, just sign in. We've missed you!</p>
                              </div>
                              <div class="img__btn">
                                <span class="m--up">Sign Up</span>
                                <span class="m--in">Sign In</span>
                              </div>
                            </div>
                            <div class="form sign-up">
                              <h2>Time to feel like home,</h2>
                           
                              <label>
                                <input type="text" id="name"  placeholder="username" name="name">
                              </label>
                              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              <label>
                                <input type="email" id="email" name="email" placeholder="E-mail">
                              </label>
                              @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                         
                              <label>
                                <input type="password" id="password"  placeholder="Password" name="password" id="password">
                              </label>
                              @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                              <label>
                                  <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm your Password" required="required" data-error="Enter your password again.">
                                </label>
                        
                                  <button type="submit" class="submit">Sign Up</button>
                                </div>
                      </form>
                      
                          </div>
                          
                 
    <script src="{{asset('customer/js/mainS.js')}}"></script>





</body>

</html>