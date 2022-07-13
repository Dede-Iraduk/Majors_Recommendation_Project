
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Flip Sign In Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}

{{-- <link href="public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> --}}
<!-- //Custom Theme files -->
<!-- web font -->
 <link href='//fonts.googleapis.com/css?family=Athiti:400,200,300,500,600,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href = "{{asset('frontend/css/styleinfo.css') }}"> 

 <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Gaia - Bootstrap Template | Free Demo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    {{-- <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet"/> --}}
    <link rel="stylesheet" href = "{{asset('css/bootstrap.css') }}"> 
    <link rel="stylesheet" href = "{{asset('css/gaia.css') }}"> 

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    {{-- <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href = "{{asset('css/fonts/pe-icon-7-stroke.css') }}"> 
    

</head>




</head>
<body>

	<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
				<a href="http://www.creative-tim.com" class="navbar-brand">
                    {{-- WELCOME, "username" --}}
					 {{ $name->Full_Name}} 
					 {{-- {{ Session::get('loggedUser') }}  --}}
                </a>
                
                  {{-- {{$data->Full_Name}} --}}
				  {{-- {{-- Hello, {{session('loginID')}} --}}
				{{-- {{ Session::get('loginID') }} --}}




				 
			
      
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                   
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Help
                        </a>
                        {{-- <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul> --}}
                    </li>
					<li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template-pro" target="_blank">My profile</a>
                    </li>
                    <li>
                        <a href="http://www.creative-tim.com/product/gaia-bootstrap-template" class="btn btn-danger btn-fill">LOGOUT
						</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>



	<!-- main -->
	<div class="main-agile">
		<!-- <h1>Modern Flip Sign In Form</h1> -->
		<div id="w3ls_form" class="signin-form">
			
			<form id="signin" action="" method="POST">
			
			

				@csrf
                {{-- <div class="ribbon"><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp">Following question</a></div> --}}
				{{-- <h2>Sign In Form</h2> --}}
				<p>Your GPA </p>
                <input type="number" name="gpa" placeholder="" required=""/>
				{{-- <span class="text-danger">@error('Email') {{$message}} @enderror</span> --}}

				<p>Grade in MATH</p>
                {{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
				<select id="continent" name="math">
					<option>select grade</option>
					<option value="AF">A</option>
					<option value="AN">B</option>
					<option value="AS">C</option>
					<option value="EU">D</option>
					</select>

					<p>Grade in English</p>
					{{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
					<select id="continent" name="english">
						<option>select grade</option>
						<option value="AF">A</option>
						<option value="AN">B</option>
						<option value="AS">C</option>
						<option value="EU">D</option>
						</select>	

					<p>Grade in Biology</p>
						{{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
						<select id="continent" name="math">
							<option>select grade</option>
							<option value="AF">A</option>
							<option value="AN">B</option>
							<option value="AS">C</option>
							<option value="EU">D</option>
							</select>
							
					<p>Grade in Physics</p>
							{{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
							<select id="continent" name="physics">
								<option>select grade</option>
								<option value="AF">A</option>
								<option value="AN">B</option>
								<option value="AS">C</option>
								<option value="EU">D</option>
								</select>	
								
					<p>Grade in Chemistry</p>
								{{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
								<select id="continent" name="chemistry">
									<option>select grade</option>
									<option value="AF">A</option>
									<option value="AN">B</option>
									<option value="AS">C</option>
									<option value="EU">D</option>
									</select>
									
					<p>Grade in History</p>
									{{-- <span class="text-danger">@error('Full_Name') {{$message}} @enderror</span> --}}
									<select id="continent" name="History">
										<option>select grade</option>
										<option value="AF">A</option>
										<option value="AN">B</option>
										<option value="AS">C</option>
										<option value="EU">D</option>
										</select>				
               

        <input type="submit" value="SUBMIT"> 
			</form>  
		
	 
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
				// $('#signin').toggle();
                $('#gpa').toggle();

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
	<script src="{{asset('js/navjquery.min.js') }}"></script>  

</body>
</html>




