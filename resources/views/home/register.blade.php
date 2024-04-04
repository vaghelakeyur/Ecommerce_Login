<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="home/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="home/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="home/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="home/css/util.css">
	<link rel="stylesheet" type="text/css" href="home/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- start header -->
		@include('home.header');
	<!-- end header -->

	<div class="container" style="margin-top: 100px;" >
		<div class="row">
			<div class="col">

				<h2 style="display: flex; justify-content:center; " >Registration Panel</h2>

				<form action="{{ url('register_confirm')}}" method="post" enctype="multipart/form-data">

					@csrf

					<div class="mb-3">
 					 	<label for="name" class="form-label">Name</label>
  						<input type="text" class="form-control" name="name" id="name" placeholder="Enter The Name">
					</div>
					
					<div class="mb-3">
 					 	<label for="email" class="form-label">Email Address</label>
  						<input type="email" class="form-control" name="email" id="email" placeholder="Enter The Email">
					</div>

					<div class="mb-3">
 					 	<label for="number" class="form-label">Mobile Number</label>
  						<input type="number" class="form-control" name="number" id="number" placeholder="Enter The Number">
					</div>

					<div class="mb-3">
 					 	<label for="password" class="form-label">Password</label>
  						<input type="password" class="form-control" name="password" id="password" placeholder="Enter The Password">
					</div>

					<div class="mb-3">
 					 	<label for="confirm_password" class="form-label">Confirm Password</label>
  						<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter The Confirm Password">
					</div>

					<div class="mb-3">
 					 	<label for="image" class="form-label">Profile Image</label>
  						<input type="file" class="form-control" name="image" id="image" >
					</div>

					<input type="submit" value="Register" name="submit" class="btn btn-info mx-4" >

					<a href="{{ url('login_view')}}"><small>Sign Up</small></a>

				</form>

			</div>
		</div>
	</div>

<!--===============================================================================================-->	
<script src="home/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/bootstrap/js/popper.js"></script>
	<script src="home/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/daterangepicker/moment.min.js"></script>
	<script src="home/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/slick/slick.min.js"></script>
	<script src="home/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="home/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="home/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="home/js/main.js"></script>

</body>
</html>