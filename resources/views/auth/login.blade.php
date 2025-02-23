<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMKN 1 Situbondo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets_log/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets_log/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets_log/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_log/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('assets_log/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                    <span class="label-input100">Email</span>
                    <input placeholder="Masukkan alamat email" id="email" type="email"
                           class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                           required autocomplete="email" autofocus>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password" placeholder="Masukkan password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="text-right p-t-8 p-b-31">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets_log/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets_log/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets_log/js/main.js')}}"></script>

</body>
</html>
