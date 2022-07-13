{{-- @extends('dashboard')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Flip Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

{{-- <link href="public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> --}}
<!-- //Custom Theme files -->
<!-- web font -->
 <link href='//fonts.googleapis.com/css?family=Athiti:400,200,300,500,600,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href = "{{asset('frontend/css/style.css') }}"> 




</head>
<body>
	<!-- main -->
	<div class="main-agile">
		<!-- <h1>Modern Flip Sign In Form</h1> -->
		<div id="w3ls_form" class="signin-form">
			<!-- Sign In Form -->
			{{-- <form id="signin" action='/login-user' method="post"> --}}
				<form id="signin" action="{{route('custom-login')}}" method="POST">
				@if(Session::has('success'))
                <div class ="alert alert-success">{{Session::get('success')}}</div>
                @endif

                @if(Session::has('fail'))
                <div class ="alert alert-danger">{{Session::get('fail')}}</div>
                @endif 

				@csrf
                <div class="ribbon"><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp">Sign Up</a></div>
				<h2>Sign In Form</h2>
				<p>Email </p>
				<input type="text" name="Email" placeholder="" value="{{old('Email')}}"/>
				<span class="text-danger">@error('Email') {{$message}} @enderror</span>
                
				<p>Password</p>
				<input type="password" name="Password" placeholder=""  value = ""/>
				<span class="text-danger">@error('Password') {{$message}} @enderror</span>
                	 
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me ?</label> 
				<input type="submit" value="SIGN IN">
				<div class="signin-agileits-bottom"> 
					<p><a href="#">Forgot password ?</a></p>    
				</div> 
				<div class="social-icons">
					<ul>  
						<li><a href="#"><span class="icons"></span><span class="text">Sign in with Facebook</span></a></li> 
						<li class="twt"><a href="#"><span class="icons"></span><span class="text">Sign in with Twitter</span></a></li>  
					</ul> 
					<div class="clear"> </div>
				</div>	
			</form> 
			<!-- //Sign In Form -->
			<!-- Sign up Form-->
            {{-- //sign up button clicked, we are taken to this URL --}}
            {{-- @if(Session::has('success'))
                <div class ="alert alert-success">{{Session::get('success')}} </div>
                @endif

                @if(Session::has('Fail'))
                <div class ="alert alert-danger">{{Session::get('Fail')}} </div>
                @endif  --}}
{{-- 
			 <form id="signup" action='/register-user' method="post">
                <form id="signup" action="registerUser" method="post">  --}}
					<form  id="signup" action="{{ route('register.custom') }}" method="POST">
                 @if(Session::has('success'))
                <div class ="alert alert-success">{{Session::get('success')}} </div>
                @endif

                @if(Session::has('Fail'))
                <div class ="alert alert-danger">{{Session::get('Fail')}} </div>
                @endif

             {{ csrf_field() }}
				<div class="ribbon"><a href="#" id="flipToRecover1" class="flipLink" title="Click Here to signin">Sign In</a></div>
				<h3>Sign Up Form</h3>

				<p>Full_Name </p>
                <input type="text" name="Full_Name" placeholder="" />
                <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span>
                
                <p>Your Email </p>
                <input type="text" name="Email" placeholder="" />
				<span class="text-danger">@error('Email') {{$message}} @enderror</span>
                
                <p>Password</p>
				<input type="password" name="Password" placeholder="" />
				<span class= "text-danger">@error('Password') {{$message}} @enderror</span>
                
                <p>Age</p>
				<input type="number" name="Age" placeholder=""/>
                <span class= "text-danger">@error('Age') {{$message}} @enderror</span>
				<p>Location</p>
				<select id="continent" name="Location">
					<option>select continent</option>
					<option value="AF">Africa</option>
					<option value="AN">Antarctica</option>
					<option value="AS">Asia</option>
					<option value="EU">Europe</option>
					<option value="OC">Australia</option>
					<option value="NA">North America</option>
					<option value="SA">South America</option>
				</select>

                <p> Gender</p>
	                <select id="lang" name="Gender" >
						<option>select Gender</option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  </select>
			 <input type="checkbox" id="brand1" value="">
				<label for="brand1"><span></span>I accept the terms of use</label> 
				<input type="submit" value="SIGN UP"> 
			</form>  
			<!-- Sign up Form-->
		{{-- </div> --}}
		<!-- copyright -->
		<!-- <div class="copyright">
			<p> © 2016 Modern Flip Sign In Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div> -->
		<!-- //copyright -->  
	{{-- </div>	 --}}
	 
	<script>
		$(function)(){
		
		// Checking for CSS 3D transformation support
		$.support.css3d = supportsCSS3D();
		
		var w3ls_form = $('#w3ls_form');
		
		// Listening for clicks on the ribbon links
		 $('.flipLink').click(function(e){
			
			// Flipping the forms
			w3ls_form.toggleClass('flipped');
			
			// If there is no CSS3 3D support, simply
			// hide the sign in form (exposing the signup one)
			if(!$.support.css3d){
				$('#signin').toggle();
			}
			e.preventDefault();
		}); 
		 
		
		

A helper function that checks for the 
support of the 3D CSS3 transformations.
function supportsCSS3D() {
var props = [
   'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
], testDom = document.createElement('a');
 
for(var i=0; i<props.length; i++){
   if(props[i] in testDom.style){
       return true;
    }
}

return false;
}
});
	
		 </script>
    <script src="{{asset('js/jquery.min.js') }}"></script> 
    <script src="{{asset('js/script.js') }}"></script>  
</body>
</html>




