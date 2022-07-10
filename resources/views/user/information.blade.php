
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




</head>
<body>
	<!-- main -->
	<div class="main-agile">
		<!-- <h1>Modern Flip Sign In Form</h1> -->
		<div id="w3ls_form" class="signin-form">
			
                <form id="gpa" action="{{ route('login.custom') }}" method="POST">
			

				@csrf
                <div class="ribbon"><a href="#" id="flipToRecover" class="flipLink" title="Click Here to SignUp">Following question</a></div>
				{{-- <h2>Sign In Form</h2> --}}
				<p>Your GPA </p>
				<input type="number" name="GPA" placeholder="" required=""/>
			
				<input type="submit" value="NEXT">
				
                <form  id="math" action="{{ route('register.custom') }}" method="POST">
               

             {{ csrf_field() }}
				<div class="ribbon"><a href="#" id="flipToRecover1" class="flipLink" title="Click Here to signin">Previous question</a></div>
				
				<p>Grade in MATH</p>
				<select id="continent" name="math">
					<option>select grade</option>
					<option value="AF">A</option>
					<option value="AN">B</option>
					<option value="AS">C</option>
					<option value="EU">D</option>
					
				</select>

              
				<input type="submit" value="NEXT"> 
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
</body>
</html>




