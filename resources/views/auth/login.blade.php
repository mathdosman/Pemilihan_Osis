
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Pemilihan Osis</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dyZtM4Cw7+1r5QvQ1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q1Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<img src="{{asset('assets/img/sample/photo/vector4.png')}}" alt="logo_dosman" height="100px" style="margin-bottom: 10px; display: block; margin-left: auto; margin-right: auto;">
			@php
				$pesan_error = Session::get('error');
			@endphp
			@if(Session::get('error'))
				<div class="alert alert-outline-warning text-center mx-auto" style="max-width:340px; margin-bottom:18px; margin-top:10px; font-size:1rem; border-radius:8px; border:1.5px solid #ffc107; background:#fffbe6; color:#b26a00; font-family:'Poppins',Arial,sans-serif;">
					<i class="fas fa-exclamation-triangle me-2"></i>
					<span>{{$pesan_error}}</span>
				</div>
			@endif
			<form class="login" action="/proseslogin" method="POST" >
                @csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" id="nisn" name="nisn" placeholder="NISN/username">
				</div>
				<div class="login__field position-relative">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" id="password" name="password" placeholder="Password">
					<span class="toggle-password" onclick="togglePassword()" style="position:absolute; right:16px; top:50%; transform:translateY(-50%); cursor:pointer; color:#1976d2; font-size:1.2rem;">
						<i id="togglePasswordIcon" class="fas fa-eye"></i>
					</span>
				</div>

				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
			<div class="social-login">
				<h3>Pemilihan Ketua OSIS <br> SMAN 1 Gianyar</h3>
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
</div>
<!-- Font Awesome for password toggle icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>
<script src="https://kit.fontawesome.com/4e5b2b7e45.js" crossorigin="anonymous"></script>
<script>
function togglePassword() {
	var input = document.getElementById('password');
	var icon = document.getElementById('togglePasswordIcon');
	if (input.type === 'password') {
		input.type = 'text';
		icon.classList.remove('fa-eye');
		icon.classList.add('fa-eye-slash');
	} else {
		input.type = 'password';
		icon.classList.remove('fa-eye-slash');
		icon.classList.add('fa-eye');
	}
}
</script>
</html>
