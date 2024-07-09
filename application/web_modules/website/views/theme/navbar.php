<!-- Login/Register Modal -->
<div class="modal-register mfp-hide" id="modal-register">
	<?php $this->load->view('website/theme/login_frm'); ?>
</div>

<!-- Header ============================================= -->
<header id="header" class="transparent-header" data-sticky-shrink="false">
	<div id="header-wrap" class="border-default">
		<div class="container">
			<div class="header-row">

				<div id="logo">
					<a href="<?php echo site_url();?>">
						<img class="logo-default" srcset="<?php echo canvas; ?>demos/ecommerce/images/logo.png, <?php echo canvas; ?>demos/ecommerce/images/logo@2x.png 2x" src="<?php echo canvas; ?>demos/ecommerce/images/logo@2x.png" alt="Canvas Logo">
					</a>
				</div>

				<div class="header-misc">
					<a href="#modal-register" data-lightbox="inline" class="button button-small fw-semibold button-border button-rounded ls-0 fw-medium text-transform-none font-noto fs-18">
						<i class="fa-solid fa-right-to-bracket"></i>
						<?php echo $this->lang->line('nav_login'); ?>
					</a>
				</div>

				<div class="primary-menu-trigger">
					<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
						<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
					</button>
				</div>

				<nav class="primary-menu">

					<ul class="menu-container">
						<?php $current = ($page == "HOME" || $page == "")? "current":"";?>
						<li class="<?php echo $current;?> menu-item">
							<a class="menu-link font-noto fs-18" href="<?php echo site_url(); ?>">
								<div>
									<?php echo $this->lang->line('nav_home'); ?>
								</div>
							</a>
						</li>
						<?php $current = ($page == "COURSE")? "current":"";?>
						<li class="<?php echo $current;?> menu-item">
							<a class="menu-link font-noto fs-18" href="<?php echo site_url('course');?>">
								<div>
									<?php echo $this->lang->line('nav_course'); ?>
								</div>
							</a>
						</li>
						<?php $current = ($page == "SERVICE")? "current":"";?>
						<li class="<?php echo $current;?> menu-item sub-menu">
							<a class="menu-link font-noto fs-18" href="#">
								<div>
									<?php echo $this->lang->line('nav_services'); ?>
									<i class="bi-caret-down-fill text-smaller d-none d-xl-inline-block me-0"></i>
								</div>
							</a>
							<ul class="sub-menu-container d-none" style="">
								<?php $current = ($page == "SERVICE" && $sub_page == "ABOUTUS")? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-circle-info"></i> <?php echo $this->lang->line('nav_services_about'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "ANNOUNCE") || ($page == "SERVICE" && $sub_page == "ANNOUNCE_DETAIL"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-bullhorn"></i> <?php echo $this->lang->line('nav_services_announce'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "NEWS") || ($page == "SERVICE" && $sub_page == "NEWS_DETAIL"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-newspaper"></i> <?php echo $this->lang->line('nav_services_news'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "DOWNLOAD") || ($page == "SERVICE" && $sub_page == "DOWNLOAD_DETAIL"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-download"></i> <?php echo $this->lang->line('nav_services_download'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "FAQ") || ($page == "SERVICE" && $sub_page == "FAQ_DETAIL"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-circle-question"></i> <?php echo $this->lang->line('nav_services_faq'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "MANUAL") || ($page == "SERVICE" && $sub_page == "MANUAL_DETAIL"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="#">
										<div class="font-noto fs-16"><i class="fa-solid fa-book"></i> <?php echo $this->lang->line('nav_services_manual'); ?></div>
									</a>
								</li>
								<?php $current = (($page == "SERVICE" && $sub_page == "SITEMAP"))? "current":"";?>
								<li class="<?php echo $current;?> menu-item">
									<a class="menu-link" href="<?php echo site_url('sitemap');?>">
										<div class="font-noto fs-16"><i class="fa-solid fa-sitemap"></i> <?php echo $this->lang->line('nav_sitemap'); ?></div>
									</a>
								</li>
							</ul>
						</li>

						<li class="menu-item ms-auto sub-menu">
							<a class="menu-link" href="#">
								<div><img src="<?php echo base_url('assets/images/icon/flag/' . $this->lang->line('lang') . '.png'); ?>" height="16" /> <i class="bi-caret-down-fill text-smaller d-none d-xl-inline-block me-0"></i><i class="sub-menu-indicator fa-solid fa-caret-down"></i></div>
							</a>
							<ul class="sub-menu-container d-none" style="">
								<li class="menu-item" style="">
									<a class="menu-link" href="?lang=th">
										<div class="font-noto fs-14"><img src="<?php echo base_url('assets/images/icon/flag/TH.png'); ?>" height="16" /> ไทย</div>
									</a>
								</li>
								<li class="menu-item" style="">
									<a class="menu-link" href="?lang=en">
										<div class="font-noto fs-14"><img src="<?php echo base_url('assets/images/icon/flag/EN.png'); ?>" height="16" /> English</div>
									</a>
								</li>
								<li class="menu-item" style="">
									<a class="menu-link" href="?lang=cn">
										<div class="font-noto fs-14"><img src="<?php echo base_url('assets/images/icon/flag/CN.png'); ?>" height="16" /> 繁體中文</div>
									</a>
								</li>
							</ul>
							<button class="sub-menu-trigger fa-solid fa-chevron-right"><span class="visually-hidden">Open Sub-Menu</span></button>
						</li>
					</ul>

				</nav>

			</div>
		</div>
	</div>
	<div class="header-wrap-clone"></div>
</header>