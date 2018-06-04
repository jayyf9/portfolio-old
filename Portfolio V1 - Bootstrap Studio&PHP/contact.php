<!DOCTYPE html>
<html>
    <?php include "header.php"; ?>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jake French
      </title>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/Article-List-1.css">
      <link rel="stylesheet" href="assets/css/Article-List.css">
      <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
      <link rel="stylesheet" href="assets/css/Carousel-Hero-1.css">
      <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
      <link rel="stylesheet" href="assets/css/ebs-contact-form1.css">
      <link rel="stylesheet" href="assets/css/Features-Clean.css">
      <link rel="stylesheet" href="assets/css/Footer-Basic.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
      <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
      <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
      <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio.css">
      <link rel="stylesheet" href="assets/css/Sortable-filter-gallery-portfolio1.css">
      <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
    <div class="container" id="info-container" style="padding-top:30px;width:70%;">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center text-info">Contact Us
          </h2>
        </div>
        <div class="col-lg-6 col-lg-offset-0 col-md-6 col-sm-6 col-xs-12" id="contact-box">
          <p id="contact-text">Use the online form on the right or get in touch via social media links at the bottom of the page.
            <br> If you are looking for a quote please try to provide as much details as possible (pages required and any special features you want your website to have). 
          </p>
          <div class="info-box">
            <i class="glyphicon glyphicon-envelope my-info-icons">
            </i>
            <span class="text-uppercase text-info">Email: 
            </span>
            <span>Jayyf9@gmail.com 
            </span>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 site-form">
          
          <form id="myform" name="contactform" method="post" action="sendFormEmail.php">
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="first_name">First Name
              </label>
              <input class="form-control" type="text" name="first_name" placeholder="First Name" autofocus="" id="first_name">
              <i class="form-control-feedback fa fa-user" aria-hidden="true">
              </i>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="last_name">Last Name
              </label>
              <input class="form-control" type="text" name="last_name" placeholder="Last Name" id="last_name">
              <i class="form-control-feedback fa fa-user" aria-hidden="true">
              </i>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="email">Email Address
              </label>
              <input class="form-control" type="text" name="email" required="" placeholder="Email" id="email">
              <i class="form-control-feedback fa fa-envelope" aria-hidden="true">
              </i>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="telephone">Phone Number
              </label>
              <input class="form-control" type="text" name="telephone" required="" placeholder="Phone" id="telephone">
              <i class="form-control-feedback fa fa-phone" aria-hidden="true">
              </i>
            </div>
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="comments">Last Name
              </label>
              <textarea class="form-control" rows="8" name="comments" required="" placeholder="Comments">
              </textarea>
              <i class="form-control-feedback fa fa-pencil" aria-hidden="true">
              </i>
            </div>
            <input type="submit" value="Submit">  
           </form>
            
            
            <?php
            $conf = $_GET['confirmation'];
            if ($conf==1) 
            {echo "Thanks, your email has been sent!";}
            else
            {}
            
            ?>
            
            
        </div>
        <div class="clearfix">
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
