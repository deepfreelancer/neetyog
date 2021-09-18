<!----footer---------->

<section id="footer">

		<div class="container ">
			<div class="row ">
				<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
					<h6>NEET YOG</h6>
					
					<p>We are the best yoga studio</p>
					<address class="footer-icons icon-location">31, Thakurdwar Karelwadi 400002, Mumbai Maharashtra, INDIA</address>
					<p class="footer-icons icon-call"><a href="tel:9653439599">+91 96534 39599</a>, <a href="tel:8779266407">+91 8779266407</a></p>
					<p class="footer-icons icon-email"><a href="mailto:info@neetyog.com">info@neetyog.com</a></p>
				</div>
				<div class=" col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
					<h6>QUICK LINKS</h6>
					
					<ul class="footer-text"> 
						<!-- <li class="my-element"><a href="about.html" ><i class="bi bi-chevron-right"></i>Join Us</a></li> -->
						
						<li  class="my-element"><a href="about.php"><i class="bi bi-chevron-right"></i>About Us</a></li>
						
						<li  class="my-element"><a href="services.php"><i class="bi bi-chevron-right"></i>Services</a></li>
						
						<li  class="my-element"><a href="contact.php"><i class="bi bi-chevron-right"></i>Contact Us</a></li>

						<!-- <li  class="my-element"><a href="contact.html"><i class="bi bi-chevron-right"></i>Contact Us</a></li> -->
					</ul>
				</div>
			<!-- 	<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-4">
					<h6>LATEST POST</h6>
					
					<p><a href="#">Lorem Ipsum Dolor Sit Amet Nullam Consectetur Adipiscing Elit.</a></p>
					<p class="text-color"><i class="fa fa-clock-o" aria-hidden="true">April 14, 2021</i></p>
					<hr class="hr_line1">
					<p ><a href="#">Lorem Ipsum Dolor Sit Amet Nullam Consectetur Adipiscing Elit.</a></p>
					<p class="text-color"><i class="fa fa-clock-o" aria-hidden="true">April 14, 2021</i></p>
				</div> -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
					<h6>SUBSCRIBE NEWSLETTER</h6>
					<div class="subcribe_form">
						<div class="input-group">
							<input type="email" name="email" placeholder="Enter Email Address" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-third" type="submit"><i class="icons icon-paper-plane-regular" aria-hidden="true"></i></button>
							</span>
						</div>
					</div>
					<div class="social_icon">
						 <h6>STAY CONNECTED</h6>
						 <a href="#"><img src="public/images/s1.png" alt="facebook" ></a>
						 <a href="#"><img src="public/images/s2.png" alt="twitter" ></a>
						 <a href="#"><img src="public/images/s3.png" alt="google" ></a>
						 <a href="#"><img src="public/images/s4.png" alt="instagram" ></a>
						 <a href="#"><img src="public/images/s5.png" alt="pinterest" ></a>
						
					</div>
			   </div>

			   <div class="footer-content">
			   	<hr class="hr_line2">
 			     <p>www.neetyog.com | © 2021 NeetYog, All right reserved</p>
 	      	</div>
			</div>
		</div>

 		
 	</div>
		<div class="scroll-icon">
			<i class="bi bi-chevron-up smoothScroll" onclick="topFunction()" id="myBtn" title="Go to top"></i>
		</div>


</section>


 <!----copyright----------->

 <!------//copyright-------->

<a href="https://api.whatsapp.com/send?phone=9653439599&text=Hi%21%20How%20Can%20we%20help%20you%20." class="float-wp" target="_blank">
<i class="icons icon-whatsapp my-float"></i>
</a>
	<!------//footer-------->
  <script type="text/javascript" src="public/js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="public/slick/slick.min.js"></script>
  <!-- <script type="text/javascript" src="public/js/animate.js"></script> -->
	<script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>




<script>
	$(document).ready(function(){
	  $(".navbar-toggler").click(function(){
	    $("#menu-bar").toggle();
	  });
	});


	$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
  });


	  // AOS.init();



/*--scroll to top-*/




var mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/*------------testimonial slick slider----------*/
$('.slider1').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: false,
  autoplaySpeed: 2000,
  speed: 1000,
  dots:true,

responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   
  ]


});

/*------------//testimonial slick slider----------*/



</script>

</body>
</html>