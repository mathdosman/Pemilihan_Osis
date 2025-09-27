
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Pemilihan Osis</title>
  {{-- <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'> --}}
{{-- <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
            <img src="{{asset('assets/img/sample/photo/vector4.png')}}" alt="logo_dosman" height="100px" style="margin-top: 12px; padding-left:25px">
			<form class="login" action="/proseslogin" method="POST" >
                @csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" id="nisn" name="nisn" placeholder="NISN/username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" id="password" name="password" placeholder="Password">
				</div>
                <div class="row" style="position: absolute">
                    <div class="col text-dark fw-bold ">
                            @php
                                $pesan_error = Session::get('error');
                            @endphp
                            @if(Session::get('error'))
                                <div class="alert alert-outline-warning">
                                    <span class="bg-warning p-1 rounded">{{$pesan_error}}</span>
                                </div>
                            @endif
                    </div>
                </div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
			<div class="social-login">
				<h3>SMAN 1 Gianyar</h3>
				{{-- <div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div> --}}
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
	</div>
</div>
<!-- partial -->

</body>
</html>
