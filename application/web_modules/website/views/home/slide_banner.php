<section id="content">
    <div class="content-wrap pt-4 pb-0">
        <div class="container">
            <div class="row align-items-stretch g-4 mb-5">
                <div class="col-xl-12">
                    <div class="fslider " data-arrows="true">
                        <div class="flexslider rounded">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/images/website/sliders/t1.png');?>" alt="Shop Image">
                                    </a>
                                </div>
                                <div class="slide">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/images/website/sliders/t2.png');?>" alt="Shop Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>