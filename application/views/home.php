<?php
$this->load->view('layout/header');
?>

<script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>

<!--slider part-->
<div class="banner-w3">
    <div class="demo-1">            
        <div id="example1" class="core-slider core-slider__carousel example_1">
            <div class="core-slider_viewport">
                <div class="core-slider_list">
                    <div class="core-slider_item">
                        <img src="<?php echo base_url(); ?>assets/theme/slider/4.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url(); ?>assets/theme/slider/2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url(); ?>assets/theme/slider/3.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="core-slider_item">
                        <img src="<?php echo base_url(); ?>assets/theme/slider/5.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
            <div class="core-slider_nav">
                <div class="core-slider_arrow core-slider_arrow__right"></div>
                <div class="core-slider_arrow core-slider_arrow__left"></div>
            </div>
            <div class="core-slider_control-nav"></div>
        </div>
    </div>
    <link href="<?php echo base_url(); ?>assets/theme/css/coreSlider.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/theme/js/coreSlider.js"></script>
    <script>
        $('#example1').coreSlider({
            pauseOnHover: false,
            interval: 3000,
            controlNavEnabled: true
        });</script>

</div>	
<!--end of slider part-->



<!--content-->
<div class="content">


    <!--custome block-->
    <div class="latest-w3">
        <div class="container">
            <h3 class="tittle1">Customize Now</h3>
            <div class="latest-grids">
                <div class="col-md-3 latest-grid">
                    <div class="latest-top">
                        <img  src="<?php echo base_url(); ?>assets/theme/images/suitb.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Suits</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4 style="    font-size: 12px;">From<br/> HK$ 1700.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 latest-grid">
                    <div class="latest-top">
                        <img  src="<?php echo base_url(); ?>assets/theme/images/shirts.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Shirt</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4 style="    font-size: 12px;">From<br/> HK$ 220.00</h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 latest-grid">
                    <div class="latest-top">
                        <img  src="<?php echo base_url(); ?>assets/theme/images/suita.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Jacket</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4 style="    font-size: 12px;">From<br/> HK$ 1200.00</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 latest-grid">
                    <div class="latest-top">
                        <img  src="<?php echo base_url(); ?>assets/theme/images/pant.jpg" class="img-responsive"  alt="">
                        <div class="latest-text">
                            <h4>Pant</h4>
                        </div>
                        <div class="latest-text2 hvr-sweep-to-top">
                            <h4 style="    font-size: 12px;">From<br/> HK$ 500.00</h4>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--end of custom block-->
    <hr/>



    <!--new-arrivals-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h2 class="tittle">New Arrivals in Suits</h2>
            <div class="arrivals-grids">
                <?php for ($i = 1; $i < 5; $i++) { ?>

                    <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                            <div  class="grid-arrival">
                                <figure>		
                                    <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal12">
                                        <div class="grid-img">
                                            <img  src="<?php echo base_url(); ?>assets/theme/dummyfab/suit/<?php echo $i; ?>.png" class="img-responsive" alt="">
                                        </div>
                                        <!--                                    <div class="grid-img">
                                                                                <img  src="<?php echo base_url(); ?>assets/theme/images/p5.jpg" class="img-responsive"  alt="">
                                                                            </div>			-->
                                    </a>		
                                </figure>	
                            </div>
                            <div class="man">
                                <h6><a href="#">Super 110s Wool </a></h6>
                                <span class="size"><?php echo "JPFSU00" . $i ?></span>
                                <p ><em class="item_price">HK$ 1700</em></p>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
    <hr/>

    <!--accessories-->
    <div class="accessories-w3l">
        <div class="container">
            <h3 class="tittle">ORIGINAL ITALIAN FABRICS</h3>
            <span style="font-size: 35px;">The best men's suits are tailored from the best cloth.</span>
            <div class="button">
                <a href="#" class="button1"> Shop Now</a>
                <a href="#" class="button1"> Quick View</a>
            </div>
        </div>
    </div>
    <!--accessories-->


    <!--Products-->
    <div class="product-agile">
        <div class="container">
            <h3 class="tittle1"> New Fabrics In Shirts</h3>
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>	 
                            <div class="caption">
                                <?php for ($i = 1; $i < 5; $i++) { ?>
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>		
                                                    <a href="#">
                                                        <div class="grid-img">
                                                            <img  src="<?php echo base_url(); ?>assets/theme/dummyfab/shirt/<?php echo $i; ?>.png" class="img-responsive" alt="">
                                                        </div>

                                                    </a>		
                                                </figure>	
                                            </div>

                                            <div class="women">
                                                <h6><a href="single.html">2 Ply 100% Cotton </a></h6>
                                                <span class="size"><?php echo "JPFSH00" . $i ?> </span>
                                                <p ><em class="item_price">$220.00</em></p>
                                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="clearfix"></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php

    ?>
</div>
<!--content-->
<hr/>

<!--clients area-->
<div class="latest-w3 testimonials" style="background: url(<?php echo base_url(); ?>assets/theme/images/backclient.jpg);    background-size: cover;">
    <h2>Testimonials</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">		
		<div class="item carousel-item active">
			<div class="img-box"><img src="<?php echo base_url(); ?>assets/theme/images/user.png" alt=""></div>
			<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
			<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="item carousel-item">
			<div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
			<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
			<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
				</ul>
			</div>
		</div>
		<div class="item carousel-item">
			<div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
			<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
			<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>
			<div class="star-rating">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star"></i></li>
					<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
				</ul>
			</div>
		</div>		
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>
</div>
<!--end of client area-->
<?php
$this->load->view('layout/footer');
?>