<?php
$this->load->view('layout/header');
?>

<style>

</style>

<!--banner-->
<div class="banner1" style='background: url("<?php echo base_url(); ?>assets/theme/images/bcontact.jpg");background-size: cover;'>
    <div class="container">
        <h3><a href="/">Home</a> / <span>Contact Us</span></h3>
    </div>
</div>
<!--banner-->
<!--content-->
<div class="content">
    <!--contact-->
    <div class="mail-w3ls">
        <div class="container">

            <div class="mail-grids">
                <div class="mail-top">
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        <h5>Address</h5>
                        <p>Shop 28A, G/F, Tsim Sha Tsui Mansion, No.83-97 Nathan Road, Tsim Sha Tsui, Hong Kong</p>
                    </div>
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        <h5>Phone</h5>
                        <p>
                        <center>
                            <table >
                                <tr>
                                    <td>Telephone</td>
                                    <td>:  +(852) 2366-6681</td>
                                </tr>
                                <tr>
                                    <td>Hotline</td>
                                    <td>:   +(852) 9196-3375 (Whatsapp & Text)</td>
                                </tr>
                            </table>
                        </center>
                        </p>

                    </div>
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <h5>E-mail</h5>
                        <p><a href="mailto:malikthetailor@netvigator.com<">malikthetailor@netvigator.com</a></p>
                        
                        <p style="margin: 0"><a href="mailto:<?php echo email_bcc; ?>"><?php echo email_bcc; ?></a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="map-w3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14765.91761221596!2d114.171823!3d22.297702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5bd30c4d20d9a2e9!2sNew+Super+Fit+Fashions!5e0!3m2!1sen!2sin!4v1540793323023" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                <div class="mail-bottom">
                    <h4>Get In Touch With Us</h4>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form id="contact-form" method="post" action="#">
                            <fieldset class="row">
                                <div class="col-sm-6">

                                    <input name="last_name" type="text" placeholder="Last Name*" class="text_field" id="form-name" data-error="This field is required" required >

                                </div>
                                <div class="col-sm-6">

                                    <input name="first_name" type="text" placeholder="First Name*" class="text_field" id="form-email" data-error="This field is required" required>

                                </div>

                                <div class="col-sm-6">
                                    <div class="">
                                        <input name="email" type="email" placeholder="Email*"  id="form-email" class="text_field" data-error="Email field is required" required>

                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <input name="contact" type="text" placeholder="Contact No."  id="form-name" class="text_field" >

                                </div>

                                <div class="col-sm-12">

                                    <select name="subject" placeholder="Subject"  style="   " required="" class="text_field">
                                        <option>Enquiry</option>
                                        <option>Send Swatches</option>
                                        <option>Feedback</option>
                                        <option>Appointment</option>
                                        <option>Alteration</option> 
                                    </select>

                                </div>




                                <div class="col-sm-12">

                                    <textarea name="message" placeholder="Message*" class="textarea text_field" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>

                                </div>
                                <div class="col-sm-12">
                                    <input type="submit" name="sendmessage" value="Send Message" style="width: 19%;">
                                    <input type="reset" value="Clear" style="width: 19%;">
                                    <link href="../../../assets/theme/css/style.css" rel="stylesheet" type="text/css"/>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col-md-2"></div>




                </div>
            </div>
        </div>
    </div>
    <!--contact-->
</div>
<!--content-->

<?php
$this->load->view('layout/footer');
?>