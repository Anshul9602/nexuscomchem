    <!-- footer content here -->
    <footer class="footer_content padding_top" data-bg-img="<?php echo base_url('assets/img/footer_dark_bg.png');?>">
      <div class="container">
        <div class="row justify-content-between mb-5">
          <div class="col-xl-5 col-md-12">
            <div class="single_footer_widget pr-lg-4">
              <a href="#" class="footer_logo">
                <img src="assets/img/NCC_Logo_png_white.png" style="width: 120px;"> </a>
              <p><br />
                G-1/206, Agro Food Park, Boranda Industrial Area, Jodhpur (Raj.) 342012 - INDIA
                <br /><br />
                Phone: +91-8696640000 (O)</br>
                Email: info@nexuscomchem.com
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="single_footer_widget">
              <h4 class="widget_tittle">Explore </h4>
              <ul>
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/causes">About</a></li>
                <li><a href="<?php echo base_url(); ?>/gallery">Certificates</a></li>
                <li><a href="<?php echo base_url(); ?>/member">Shipping</a></li>
                <li><a href="<?php echo base_url(); ?>/contact">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="col-xl-4 col-md-12">
            <div class="single_footer_widget">
              <h4 class="widget_tittle">Subscribe</h4>
              <div id="mc_embed_signup">
                  <div class="input-group">
                    <input type="text" id="email" class="form-control" placeholder="Enter your email">
                    <div class="input-group-append ">
                      <button name="submit" id="newsletter-submit"
                      class="email_icon newsletter-submit button-contactForm input-group-text goldenrod_bg_1">
                      <i class="fas fa-envelope"></i>
                    </button>
                    </div>
                  </div>
                  <div class="mt-10 info"></div>

              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="copyright_part">
              <p class="copyright_desc">© 2020 NCCS. All Rights Reserved.
                <br />
                Designed by <a style="color: #fff;" href="https://theodin.in/"> The Odin</a></p>
            </div>
          </div>
        </div>

      </div>
    </footer>
    <!-- footer content end -->
    </div>










    <!-- scorl to top -->
    <a class="pu_scorl_top btn--plain hide-from-print" href="#" id="pu_scorl_top">
      <div class="page-scroll-up goldenrod_bg">
        <i class="arrow-top fas fa-angle-up"></i>
        <i class="arrow-bottom fas fa-angle-up"></i>
      </div>
    </a>

    <!-- WhatsApp Chat -->
    <a class="" target="_blank" href="https://api.whatsapp.com/send/?phone=918696640000&text&app_absent=0" style="position:fixed; bottom:100px; right:25px; z-index:999">
      <img src="<?php echo base_url();  ?>assets/img/wa.png" alt="" style="width:70px;">
    </a>

<script>
    $(document).ready(function(){
      $('#newsletter-submit').click(function(e){
          e.preventDefault();
          if($("#email").val()){
            $.ajax({
            url:'https://nexuscomchem.com/contact/subscriber_submit',
            method:'POST',
    		data:{"email":$("#email").val()},
				success: function(data){
                	alert("Subscribed Successfully!");
					$("#email").val("");
					}
			})
			}else{
				alert("Please fill the form completely");
				}
		})


    })
</script>
    <!-- jquery slim -->

    <!-- popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- bootstarp js -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- magnify popup js -->
    <script src="assets/vendors/magnify_popup/jquery.magnific-popup.js"></script>
    <!-- owl carousel js -->
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <!-- wow js -->
    <script src="assets/vendors/wow/wow.min.js"></script>
    <!-- slider js -->
    <script src="assets/js/slider.js"></script>
    <!-- progressbar js -->
    <script src="assets/vendors/progressbar/progressbar.js"></script>
    <script src="assets/vendors/countdown/js/jquery.waypoints.min.js"></script>
    <!-- counter js -->
    <script src="assets/vendors/countdown/js/jquery.counterup.min.js"></script>
    <!-- headroom js -->
    <script src="assets/vendors/headroom.js"></script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    </body>

    </html>

