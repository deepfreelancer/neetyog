<?php include 'include/header_inner.php'?>
<!-- BREADCRUMBS SECTION -->
    <section class="breadcrumb-section">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <div class="one">
                <h1>CONTACT US</h1>
              </div>
            </li>
            <!-- <li class="text-center"><span class="breadcrumb-item-line"> / </span></li> -->
           <!--  <li class="breadcrumb-item active">
              <div class="seven">
                <h1>Style Seven</h1>
              </div>
            </li> -->
          </ol>
        </nav>
      </div>
    </section>
    <!--// BREADCRUMBS SECTION //-->
<section class="contact">
  <div class="container">
     
    <div class="row mb-4">
      <div class="mb-3 col-md-6">
        <div class="contact-form shadow">
        <h3>Let's Start a Conversation</h3>
          <form role="form" action="" method="post" id="contact-form">
            <div class="form-group row">
              <div class="col-md-12 mb-3 col-12">
                <input name="first_name" required="required" type="text" placeholder="Enter Your Name" class="form-control" />
                </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 col-12 col-sm-6 mb-3">
                <input name="email" required="required" type="email" class="form-control" placeholder="Email ID"/>
              </div>
              <div class="col-md-6 col-12 col-sm-6 mb-3">
                <input name="mobile" required="required" type="text" class="form-control" placeholder="Enter Mobile No"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 mb-3 col-12">
                <textarea name="message" class="form-control" placeholder="Enter Any Message"></textarea>
              </div>
            </div>
            <input name="submit" type="submit" id="contact-form-btn" value="Send a Mail" class="btn btn-second" /> 
          </form>
        </div>
      </div>
      <div class="mb-3 col-md-6">
        <div class="contact-details shadow">
        <h3>Ask How We Can Help You?</h3>
          <ul>
            <li>
              <div class="col-sm-1">
                <i class="icons icon-location"></i>
              </div>
              <div class="col-sm-10">
                <strong>LOCATION:</strong>
                <p>31, Thakurdwar Tarelwadi 400002, Mumbai Maharashtra, INDIA</p>  
              </div>
              
            </li>
            <li>
              <div class="col-sm-1">
                <i class="icons icon-call"></i>
              </div>
              <div class="col-sm-10">
                <strong>CALL US:</strong>
                <p><a href="tel:8779266407">+91 8779266407</a>, &nbsp;<a href="tel:8779266407">+91 9653439599</a></p>
              </div>
            </li>
            <li>
              <div class="col-sm-1">
                <i class="icons icon-email"></i>
              </div>
              <div class="col-sm-10">
                <strong>Email US:</strong>
                <p><a href="mailto:info@neetyog.com">info@neetyog.com</a></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5171.125482570751!2d72.82107319314734!3d18.952829403060623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce1936bac377%3A0x1a3452409122c830!2sThakurdwar%2C%20Kalbadevi%2C%20Mumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1631634053787!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</section>
<!-- <button class="btn-demo btn" onclick="function_alert();">CLICK</button> -->

  
<!-- <button class="preview" id="ShowBtn">Preview</button>
<script>
document.getElementById('ShowBtn').onclick = function(){
  swal("Good job!", "You clicked the button!", "success");
};

</script> -->
<script src="public/js/jquery-3.3.0.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script> -->
<script src="public/js/sweetalert.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
  $.ajax({
      url:'secure_email_code.php', //===PHP file name====
      data:$(this).serialize(),
      type:'POST',
     // var first_name = 'first_name',
      success:function(data){
        console.log(data);
        //Success Message == 'Title', 'Message body', Last one leave as it is
      swal({
          'title':'Mail Sent. Thank you ',
          'html':'true',
          'text': 'we will contact you shortly.',
          'icon': 'success'
        }).then(function(){ 
            location.reload();
          });
      },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
      swal("Oops...", "Something went wrong :(", "error");
      }
    });
    e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
  });
 $('#contact-form').on('submit',function() {
    $('#contact-form-btn').value ="Sending..";
 });

});
</script>
<link rel='stylesheet' href='public/css/sweetalert.min.css'></link>  


<?php include 'include/footer.php'?>