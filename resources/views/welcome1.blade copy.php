<!DOCTYPE html>
<html>

	<head>
		<title>Welcome to the Tamisemi Workers Transfer Management System</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png" />
		<meta name="description"
			content="The PWTMS public workers transfer management system helps teacher and public workers in health center.">
		<meta name="keywords" content="teacher, nurse, transfer report,">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/button.css" />
		<script src="https://kit.fontawesome.com/bf523026c9.js" crossorigin="anonymous"></script>
	</head>
	<style>
	#header{
		 background-image: url("img/Tamisemi11.png");
		 
		  background-repeat: no-repeat;
		  width:100%;
	}
	nav{
		  margin-top: 0;
		 
		 
		
	}
	.img{
		 margin:0%;
		
		  position:relative;		
	}
	.img1{
		  position:absolute;
		 
		 color:black;
		  font-size:67px;
		  top:17px;
		  left:50px;		
	}
	.img2{
		  position:absolute;
		
		  color:black;
		  font-size:67px;
		  bottom:20px;
		  left:50px;		
	}
	td{
		  margin-top: 0;
		  background-color:white;
		 
		 
		
	}
	#nav1{
		 
		background-color: gray;		
	}
	#main{
		  padding-left: 210px;
		  padding-right: 210px;
		background-color: white;		
	}
	</style>

	<body>
		<div id="main">
			<div id="header">
				
					
						
					
			
			</div>
			<nav>
			     <div id="nav1">
           <ul id="menu">
		              <li><a href="{{ url('/') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li>
                @if (Route::has('login'))
                <li class="selected">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ url('registe') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
						
                        
                                          @endauth
               
            @endif
					
				</ul>
				</div>
			</nav>

			<!-- Pages Content -->
			<div class="content">
			<table style="width:100%">
			  <tr>
			  <td style="width:40%"><img src="img/N22.png" alt="Avatar" style="width:80%">
			  
			  </td>
			  
			 	 <td rowspan="2">
				
				<div class="img">
				
						<img  src="img/side2.jpg" style="width:100%">
						<h2 class="img1">
                                Teacher Transfer Management System
								<a href="{{ url('registe') }}">continue</a>
                        </h2>
						
						
               </div>
				
           	</td>
			  </tr>
			  <tr>
			   <td><img src="img/kt3.png" alt="Avatar" style="width:80%"></td>
			  </tr>
        </table>
		<div id="footer">
			<p>Copyright &copy; TAMISEMI <?php echo date("Y"); ?> All Rights Reserved.</p>
		</div>
		<!-- JAVASCRIPTS -->
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/_crime.js"></script>
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("slide");
			if (n > slides.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = slides.length;
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none"
			}
			slides[slideIndex - 1].style.display = "block";
		}
		</script>
	</body>

</html>