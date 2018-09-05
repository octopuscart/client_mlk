<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>
<?php
include APPPATH.'/views/layout/header.php';
?>
<!-- Content -->
<div id="content"> 
    <!-- Tesm Text -->
    <section class="error-page text-center pad-t-b-130">
        <div class="container "> 
            <!-- Heading -->
            <h1>404</h1>
            <p>We're sorry, the page you requested cannot be found.<br>
                You can go back to</p>
            <hr class="dotted">
            <a href="/" class="btn btn-inverse">BACK TO HOME</a>
        </div>
    </section>
</div>
<!-- End Content --> 
<?php
include APPPATH.'/views/layout/footer.php';
?>