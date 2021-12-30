<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

 <br><br><br><br><br><br><br>
 <div class="row">
                <div class="col-lg-12">
                  <h1 style="text-align:center; font-family: 'Monotype Corsiva'; font-size:40px; color:red;"><b>About Us</b></h1><br>
                    <p style="text-align:center; font-family: 'Monotype Corsiva'; font-size:30px;">
                      This website is working on face recognition attendance system and also provided dashboard for admin.
                      We are providing graphical and tabular structure of student's attendant. 
                      We are analysing the performance of student on the basis of attendance data.
                    </p>
                </div>
            </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>









































<?php include 'includes/footer.php';?>

        