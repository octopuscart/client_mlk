<!---footer--->
<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>
                NEW SUPER FIT Fashions is a multi-award winning tailor based in Hong Kong for over 48 years ago with a customer base that stretches throughout the world. NEW SUPER FIT Fashions always achieves the highest possible standard of personal tailoring ensuring total customer satisfaction. </p>
                <div class="social-icon">
                    <a href="#"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <!--<a href="#"><i class="icon3"></i></a>-->
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Shop Now</h4>
                <ul>
                    <li><a href="#">Suits</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#"> Jackets </a></li>
                    <li><a href="#"> Pants </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Catalogue</a></li>
                    <li><a href="<?php echo site_url('Shop/aboutus'); ?>">About Us </a></li>
                    <li><a href="<?php echo site_url('Shop/contactus'); ?>">Contact Us</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/4VmK6AwoyrD2">Shop 28A, G/F, <br/>Tsim Sha Tsui Mansion,<br/> No.83-97 Nathan Road, Tsim Sha Tsui,<br/> Hong Kong</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">+(852) 2366 6681 </a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo email_bcc;?>"> <?php echo email_bcc;?></a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url();?>"><?php echo sitename;?></a>. All rights reserved </p>
        </div>
        <div class="copy-right">
            <img src="images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->

</div>
</body>
<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/typeahead.bundle.js" type="text/javascript"></script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

</html>