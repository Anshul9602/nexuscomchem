<!-- beadcrumb part here -->
<section class="pu_beadcrumb_part" data-bg-img="assets/img/Guar-Powder_Banner.jpg">
  <div class="container custom_container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pu_breadcrumb_inner_content">
          <h5 class="sub_title">Get in touch</h5>
          <h1 class="title">contact us</h1>
          <ul class="pu_breadcrumb_nav">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">contact us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="pu_beadcrumb_shape"></div>
</section>
<!-- beadcrumb part end -->

<!-- map part here -->
<section style="background: #fff;" class="pu_event_details">
  <div class="container custom_container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pu_single_page_wrapper">
          <div class="map">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.1940566501644!2d72.92743001546111!3d26.15780879847475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394189e2acd4ae65%3A0xc4a75f9070c4b969!2sNexus%20Commodities%20%26%20Chemicals!5e0!3m2!1sen!2sin!4v1616223832159!5m2!1sen!2sin">
            </iframe>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- map part end -->

<!-- contact part here -->
<section style="background: #fff;" class="pu_contacr_part">
  <div class="container custom_container">
    <div class="row">
      <div class="col-lg-12">
        <div class="pu_contacr_wrapper">
          <div class="row">
            <div class="col-lg-8">
              <div class="pu_contact_form_wrapper">
                <div class="contact_form_title">
                  <h5 class="sub_title">Contact with us</h5>
                  <h2 class="title">Send Message</h2>
                </div>
                <div class="contact_form_inner">
                  <form role="form" class="php-email-form">
                    <div class="form-group">
                      <input type="text" name="full_name" id="name" class="form-control cu_input" placeholder="Your full name">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control cu_input" placeholder="Your email address">
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="message" class="cu_input" placeholder="What you are looking for?"></textarea>
                    </div>

                  </form>
                   <div class="form-group">
                      <button id="send_con" class="cu_btn base_btn">Submit Now</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pu_contact_info_wrapper text-center bg-transparent">
                <div class="contact_form_title">
                  <h5 class="sub_title">Contact info</h5>
                  <h2 class="title">Details</h2>
                </div>
                <div class="contact_page_info">
                  <h5 class="info_title">Address</h5>
                  <p class="desc">G-1/206, Agro Food Park,<br /> Boranda Industrial Area,<br /> Jodhpur (Raj.) 342012 - INDIA</p>
                </div>
                <div class="contact_page_info">
                  <h5 class="info_title">Phone</h5>
                  <p class="desc">
                    +91-86966 40000 (O)</p>
                </div>
                <div class="contact_page_info">
                  <h5 class="info_title">Email</h5>
                  <p class="desc">Info@nexuscomchem.com</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br />
</section>
<!-- contact part end -->



<!-- cta part here -->
<section class="cta_part section_padding" data-bg-img="assets/img//breadcrumb_bg.png">
  <div class="container custom_container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="pu_cta_part_wrapper">
          <h2 class="title">Let's make a difference in <br>
            the lives of others</h2>
            <div style="display:flex; flex-direction: column; align-items:center; justify-content:center">
                <a href="<?php  echo base_url(); ?>contact" class="cu_btn white_btn" style="margin-bottom:15px;">Contact</a>
                <a href="assets/img/Food Grade Brochure - NCC.pdf" download target='_blank' class="cu_btn white_btn">
                <i class="fas fa-download"></i>
                Brochure
              </a>
              </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- cta part end -->

<script>
$(document).ready(function(e) {
    $("#send_con").click(function(e){
        e.preventDefault();
        if($("#email").val()!="" && $("#name").val()!="" && $("#message").val() !="" ){
            $.ajax({
            url:'https://nexuscomchem.com/contact/contact_form_submit',
    		method:'POST',
			data:{"email":$("#email").val(),"name":$("#name").val(),"message":$("#message").val()},

				success: function(data){
                    console.log(data);

					alert("Message Sent!");
					$("#email").val("");
					$("#name").val("");
				   $("#message").val("");
					}

			})
			}else{
				alert("Please fill the form completely");
				}


		})
});

</script>
