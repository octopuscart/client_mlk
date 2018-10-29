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

<?php
$clients = array(
    '1' => array('name' => 'Dean H', 'position' => 'TripAdvisor', 'review' => "I met Malik four years ago while in Hong Kong. The quality of New Super Fit Fashion is far superior than other more well-known and more expensive tailors. Malik stands by his clothing and I’ll be coming back as well as recommending him to others.

"),
    '2' => array('name' => 'Robert P', 'position' => 'TripAdvisor', 'review' => "I went to Superfit fashions three times in the last 8 years or so for shirts. When I came for the second time after some 5 years they still had my measurements. I outgrew them a little (sigh)
Very good quality. It was delivered at my hotel within the agreed time and I can honestly say the quality is extremely good. Maybe not the cheapest tailor (although I haven't visited another one but from hearsay) but after years the shirts are still great!!
Can't wait to go back to HKG. I will DEFINATELY stop at their shop again!
Compliments!!"),
);
?>

<!--clients area-->
<div class="latest-w3 testimonials" style="    padding: 2em 0 0em;background: url(<?php echo base_url(); ?>assets/theme/images/backclient.jpg);    background-size: cover;">
    <h2>Testimonials</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <?php foreach ($clients as $key => $value) { ?>
                <li data-target="#myCarouse<?php echo $key; ?>" data-slide-to="<?php echo $key; ?>" class="active"></li>
            <?php } ?>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">	
            
            <?php foreach ($clients as $key => $value) { ?>
            <div class="item carousel-item <?php echo $key=='1'?'active':'';?>">
                <!--<div class="img-box"><img src="<?php echo base_url(); ?>assets/theme/images/user.png" alt=""></div>-->
                <p class="testimonial"><?php echo $value['review'];?></p>
                <p class="overview"><b><?php echo $value['name'];?></b>Review at <a href="#"><?php echo $value['position'];?></a></p>
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
            <?php } ?>
        		
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