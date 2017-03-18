<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxmart Trading | </title>

        <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body data-title="Contact Us">
        
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        
        <div class="container-fluid">
            <div class="row top-head">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
        <div class="container-fluid topMobileHead">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-md hidden-lg mobileLogoHead">
                    <img src="img/logo.jpg" class="img-responsive">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </div>
    
        

        <div class="container">
        
        
        
        <nav class="navbar navbar-fixed">
        
            <div class="navbar-header">
                
                
                <a class="navbar-brand hidden-xs" href="#"><img src="img/logo.jpg"></a>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="vision.html">VISION &amp; MISSION</a></li>
                    <li class="dropdown"><a href="product.html" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCT &amp; SERVICES<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="garments.html">GARMENTS</a></li>
                            <li><a href="uniforms.html">UNIFORMS</a></li>
                            <li><a href="tissues.html">CORPORATE TISSUES</a></li>
                        </ul>
                    </li>
                    <li><a href="ppe.html">PPE</a></li>
                    <li><a href="client.html">CLIENT LIST</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
                
                
            </div>
        
    </nav>
        </div>
        
        <div class="container-fluid">
    
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item item1 active">

                      <div class="container">
                        <div class="carousel-caption hidden-xs">
                          <h1>
                              GARMENTS<br>
                              <span>wide range of designer clothing like t shirts, shirts, trousers etc</span>
                            </h1>
                        </div>
                      </div>
                    </div>
                    <div class="item item2">

                      <div class="container">
                        <div class="carousel-caption hidden-xs">
                          <h1>UNIFORMS<br>
                              <span>we design and develop corporate uniforms across all industries</span>
                            
                            </h1>
                        </div>
                      </div>
                    </div>
                    <div class="item item3">

                      <div class="container">
                        <div class="carousel-caption hidden-xs">
                          <h1>CORPORATE TISSUES<br>
                              <span>provide all types tissues related to hotels, hospitals and corporate houses</span>
                            
                            </h1>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        
        
        
        <div class="container">
            
            <div class="row gray">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    
                    <?php

                            //error_reporting(E_ALL ^ E_NOTICE);

                            if(isset($_POST['name']))
                            {
                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $company=$_POST['company'];

                            $message .="<table width=70%  border=0 cellspacing=0 cellpadding=0 style='background:#FFF; border: 1px solid #8fba2c;'>
                            <tr>
                            <td colspan=2 align=center ><img src='http://maxmarttrading.com/images/logo.jpg' width='150'></td>
                            </tr>
                            <tr>
                            <td colspan=2 align=center style='background:#8fba2c; height:5px;' ></td>
                            </tr>
                            <tr style='background:#F0F0F0;'>
                            <td style='padding:10px;'>Name : </td>
                            <td style='padding:10px;' colspan=2>$name</td>
                            </tr>
                            <tr>
                            <td style='padding:10px;' >Address : </td>
                            <td style='padding:10px;' colspan=2>$address</td>
                            </tr>
                            <tr style='background:#F0F0F0;'>
                            <td style='padding:10px;' >E-mail : </td>
                            <td style='padding:10px;' colspan=2>$email</td>
                            </tr>
                            <tr>
                            <td style='padding:10px;' >Phone No : </td>
                            <td style='padding:10px;' colspan=2>$phone</td>
                            </tr>
                            <tr style='background:#F0F0F0;'>
                            <td style='padding:10px;' >Company : </td>
                            <td style='padding:10px;' colspan=2>$company</td>
                            </tr>
                            
                            <tr>
                            <td colspan=2 align=center style='background:#244386; padding:10px; text-align:center; color: #FFF;' >© Maxmart Trading 2016.</td>
                            </tr>


                            </table>
                            ";
                            $tomail="sales@maxmarttrading.com";
                            //$tomail="albertef@gmail.com";

                            $subject="Online Feedback/Enquiry";
                            $headers = "MIME-Version: 1.0\r\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                            $headers .= "From:".$email;



                            if(mail($tomail, $subject, $message, $headers))
                             {
                             //echo '<script type="text/javascript">alert("Feedback sent successfully. Thank You.. "); </script>';
                                echo '<p class="bg-success">Enquiry sent successfully. Thank You..!</p>';
                              }
                            else
                            {
                                 //echo '<script type="text/javascript">alert("Email sending failed.Try again... "); </script>';
                                echo '<p class="bg-danger">Email sending failed. Try again..!</p>';

                            }

                            }	   
                        ?>
                    
                    <div class="green-inner">
                        <h2>Contact Us</h2>
                    </div>
                    
                    <p>
                        <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3578.8012714322417!2d50.595593900000004!3d26.235646000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDE0JzA4LjMiTiA1MMKwMzUnNDQuMSJF!5e0!3m2!1sen!2sin!4v1429805214155" width="100%" height="300" frameborder="0" style="border:0"></iframe-->
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.0060986904177!2d50.58070051742247!3d26.228991379318604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDEzJzQyLjYiTiA1MMKwMzUnMDAuMSJF!5e0!3m2!1sen!2ssa!4v1479352653258" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                    </p>
                    
                    <p class="inner-content">
                        
                        
                        
                        <form class="form-horizontal" action="" method="post" name="enqry" id="enqry">
                            <div class="form-group">
                                <label for="Name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="Name" placeholder="Name" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" id="Address" placeholder="Address" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Company" class="col-sm-2 control-label">Company</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" class="form-control" id="Company" placeholder="Company" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Phone" class="col-sm-2 control-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="phone" class="form-control" id="Phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Email" class="col-sm-2 control-label">Email address</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="Email" placeholder="Email address" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    
                    </p>
                </div>
               
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="fb-page"
                          data-href="https://www.facebook.com/maxmartbahrain" 
                          data-width="355"
                          data-hide-cover="false"
                          data-show-facepile="true">
                    </div>
                    
                    <div class="twitter">
                        <a class="twitter-timeline" data-width="355" data-height="400" href="https://twitter.com/maxmart_bh">Tweets by webvibrant</a> 
                        <a href="https://twitter.com/maxmart_bh" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @webvibrant</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    
                </div>
            </div>
            
           
            
        </div>
        
         
        
        
            
            <div class="row footer">
                 <div class="container">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h2>CONTACTS</h2>
                        <p>
                             MaxMart <br>
                            Shop No. 292/A, Road# 318, <br>
                            Block# 307, Gudaibia, <br>
                            Manama, Kingdom of Bahrain.<br><br>
                            
                            <span class="hidden-md hidden-lg">
                                Phone: +973 17810451<br>
                                Fax: +973 17810452<br><br>

                                Email: <a href="mailto:sales@maxmarttrading.com">sales@maxmarttrading.com</a>
                            </span>

                        </p>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <p class="margin-top">Phone: +973 17810451<br>
                         Fax: +973 17810452<br><br>

                         Email: <a href="mailto:sales@maxmarttrading.com">sales@maxmarttrading.com</a></p>
                    </div>
                     
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <p class="margin-top hidden-lg hidden-md"></p>
                        <p class="social">
                            <a href="http://www.facebook.com/maxmartbahrain" target="_blank"><img src="img/social1.png" class="img-responsive"></a>
                            <a href="http://www.twitter.com/maxmart_bh" target="_blank"><img src="img/social2.png" class="img-responsive"></a>
                            <a href="http://www.instagram.com/maxmart_bh" target="_blank"><img src="img/social3.png" class="img-responsive"></a>
                            
                            
                        </p>
                        
                        
                        <p>
                            <br>
                            <a href="disclaimer.html">Disclaimer</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="privacy.html">Privacy Policy</a><br><br>

                            All rights reserved. <br class="hidden-sm hidden-xs">
                            © Maxmart Trading 2016
                        </p>
                    </div>
                </div>
            </div>
            
           
            
        </div>
    
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--<script src="js/bootstrap.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <script>
            
            $('ul.nav li.dropdown').hover(function() {
                console.log($('.cotainer').outerWidth());
                if($(window).width() >= 767) {
                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
                }
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
            });
            
            var title = $('body').attr('data-title');
            $('title').text('Maxmart Trading | ' + title);
        </script>
    </body>
</html>