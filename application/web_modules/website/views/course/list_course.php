<main class="postcontent col-lg-9 order-lg-last">

    <div class="d-flex flex-row-reverse bd-highlight col-12 mb-3">
        <div class="p-2 bd-highlight col-md-6 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control font-noto" placeholder="<?php echo $this->lang->line('search_text');?>">
                <div class="input-group-append">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <span class="text font-noto"></span>
        </div>
    </div>

    <div class="row">

        <!-- Item 1 -->
        <?php for ($i = 0; $i < 15; $i++) : ?>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="i-products">
                    <div class="products-image">
                        <a href="<?php echo canvas; ?>demo-crowdfunding-single.html">
                            <img src="<?php echo canvas; ?>demos/crowdfunding/images/items/1.jpg" alt="Image 1">
                            <span class="badge">Gadgets</span>
                        </a>
                    </div>
                    <div class="products-desc">
                        <h3><a href="<?php echo site_url('course/detail/1');?>">iDrone 2019</a></h3>
                        <p>Holisticly conceptualize transparent niche markets whereas top-line web services.
                            Monotonectally parallel task cross-unit platforms rather than.</p>
                        <div class="skill-progress mb-3" data-percent="73" style="--cnvs-progress-height: 0.25rem;">
                            <div class="skill-progress-title d-flex justify-content-between mb-2">
                                <span class="counter"><span data-from="0" data-to="73" data-refresh-interval="10" data-speed="1200"></span><strong>%</strong>
                                    Funded</span>
                                <span class="counter"><span data-from="0" data-to="20" data-refresh-interval="3" data-speed="1200"></span> Days Left</span>
                            </div>
                            <div class="skill-progress-bar">
                                <div class="skill-progress-percent bg-color"></div>
                            </div>
                        </div>
                        <div class="products-hoverlays">
                            <span class="products-location"><i class="bi-geo-alt-fill"></i> Melbourne,
                                Australia</span>
                            <ul class="list-group-flush my-3 mb-0">
                                <li class="list-group-item"><strong>$12,32,000</strong> Pledged</li>
                                <li class="list-group-item"><strong>123</strong> Partcipants</li>
                                <li class="list-group-item"><strong>345</strong> Contributions</li>
                                <li class="list-group-item"><strong>20</strong> days remaining</li>
                            </ul>
                            <div class="product-user d-flex align-items-center mt-4">
                                <img src="<?php echo canvas; ?>demos/crowdfunding/images/investors/1.jpg" alt="">
                                <a href="<?php echo canvas; ?>demo-crowdfunding-single.html">By Jackson Pot </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>

    <!-- Pager
							============================================= -->
    <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-outline-secondary">← Older</a>
        <a href="#" class="btn btn-outline-dark">Newer →</a>
    </div>
    <!-- .pager end -->

</main>