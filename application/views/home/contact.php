<!-- banner -->
  <div class="banner10" id="home1">
    <div class="container">
      <h2>Mail Us</h2>
    </div>
  </div>
<!-- //banner -->

<!-- breadcrumbs -->
  <div class="breadcrumb_dress">
    <div class="container">
      <ul>
        <li><a href="<?php print base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
        <li>Mail Us</li>
      </ul>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- mail -->
  <div class="mail">
    <div class="container">
      <h3>Mail Us</h3>
      <div class="agile_mail_grids">
        <div class="col-md-5 contact-left">
          <h4>Address</h4>
          <p>est eligendi optio cumque nihil impedit quo minus id quod maxime
            <span>26 56D Rescue,US</span></p>
          <ul class="address">
            <li>Free Phone :+1 078 4589 2456</li>
            <li>Telephone :+1 078 4589 2456</li>
            <li>Fax :+1 078 4589 2456</li>
            <li><a href="#">test@test.com</a></li>
          </ul>
        </div>
        <div class="col-md-7 contact-left">
          <h4>Contact Form</h4>
          <form  method="post" name="frmContact" id="frmContact" method="post">
            <div class="form-group">
              <input type="text" name="fname" value="" placeholder="Your name" data-validation="required" class="form-control">
              <input type="email" name="email" value="" placeholder="Your email address" data-validation="required email" class="form-control">
              <input type="text" name="phone" value="" placeholder="Your contact number" data-validation="required number length" data-validation-length="min10" class="form-control" maxlength=10>              
            </div>
            <div class="form-group"><textarea name="message" id="message" placeholder="Your feedback"></textarea></div>
            <div class="form-group"><input type="submit" class="btnsend" value="Send"></div>
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //mail -->
<!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="col-md-6 w3agile_newsletter_left">
        <h3>Newsletter</h3>
        <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
      </div>
      <div class="col-md-6 w3agile_newsletter_right">
        <form action="#" method="post">
          <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
          <input type="submit" value="">
        </form>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //newsletter -->