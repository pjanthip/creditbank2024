<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #373D52">
			<!-- <div class="container">

				<div class="footer-widgets-wrap pb-4">

					<div class="row">

						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget">

								<h4 class="ls-0 mb-4 text-transform-none">Features</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#">Help Center</a></li>
									<li class="mb-2"><a href="#">Paid with Moblie</a></li>
									<li class="mb-2"><a href="#">Status</a></li>
									<li class="mb-2"><a href="#">Changelog</a></li>
									<li class="mb-2"><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget">

								<h4 class="ls-0 mb-4 text-transform-none">Support</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#">Home</a></li>
									<li class="mb-2"><a href="#">About</a></li>
									<li class="mb-2"><a href="#">FAQs</a></li>
									<li class="mb-2"><a href="#">Support</a></li>
									<li class="mb-2"><a href="#">Contact</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget">

								<h4 class="ls-0 mb-4 text-transform-none">เครือข่ายภายใน</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#">Shop</a></li>
									<li class="mb-2"><a href="#">Portfolio</a></li>
									<li class="mb-2"><a href="#">Blog</a></li>
									<li class="mb-2"><a href="#">Events</a></li>
									<li class="mb-2"><a href="#">Forums</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget">

								<h4 class="ls-0 mb-4 text-transform-none">Get to Know us</h4>

								<ul class="list-unstyled iconlist ms-0">
									<li class="mb-2"><a href="#">Corporate</a></li>
									<li class="mb-2"><a href="#">Agency</a></li>
									<li class="mb-2"><a href="#">eCommerce</a></li>
									<li class="mb-2"><a href="#">Personal</a></li>
									<li class="mb-2"><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4 col-md-4 text-md-end">
							<div class="widget">

								<img src="<?php echo canvas;?>demos/ecommerce/images/logo-footer.png" alt="" height="60" class="mb-3">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

								<div class="d-flex justify-content-md-end">
									<a href="#" class="social-icon si-small text-light border-0 bg-facebook" title="Facebook">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>

									<a href="#" class="social-icon si-small text-light border-0 bg-instagram" title="instagram">
										<i class="bi-instagram"></i>
										<i class="bi-instagram"></i>
									</a>

									<a href="#" class="social-icon si-small text-light border-0 bg-paypal" title="Paypal">
										<i class="fa-brands fa-paypal"></i>
										<i class="fa-brands fa-paypal"></i>
									</a>

									<a href="#" class="social-icon si-small text-light border-0 bg-wikipedia" title="Apple Pay">
										<i class="fa-brands fa-apple-pay"></i>
										<i class="fa-brands fa-apple-pay"></i>
									</a>
								</div>

							</div>
						</div>

					</div>

                </div>
			</div> -->

			<!-- Copyrights
			============================================= -->
			<div id="copyrights font-noto">
				<div class="container">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6"><?php echo $this->lang->line('footer_copyright');?></div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links font-noto">
                                <a href="<?php echo site_url('sitemap');?>"><?php echo $this->lang->line('nav_sitemap');?></a> | 
                                <a href="tel:+6653776008"><?php echo $this->lang->line('nav_tel');?> : (+66)53 776 008</a> | 
								<a href="https://goo.gl/maps/kFBEH63Paagqg88G6" target="_blank"><?php echo $this->lang->line('nav_map');?> : <img src="<?php echo base_url('assets/images/icon/etc/google-maps.png');?>" height="32"/></a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="bi-arrow-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo canvas;?>js/plugins.min.js"></script>
	<script src="<?php echo canvas;?>js/functions.bundle.js"></script>
	<script src="assets/js/language.js"></script>

	<!-- Parallax Script
	============================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	<script>!SEMICOLON.Mobile.any() && skrollr.init({forceHeight: false});</script>

</body>
</html>