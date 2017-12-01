<!DOCTYPE html>
<html>
<head>
<title>Ecommerce Online Shop | Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<?php foreach ($this->css as $css) :?>
    <link href="<?php print $css?>" rel="stylesheet" type="text/css" media="all" />
<?php endforeach;?>
</head>
    
<body>
<!-- header -->
    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Don't Wait, Login now!</h4>
                </div>
                <div class="modal-body modal-body-sub">
                    <div class="row">
                        <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                            <div class="sap_tabs">  
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <ul>
                                        <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                                    </ul>       
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="#" method="post">         
                                                    <input name="Email" placeholder="Email Address" type="text" required="">                        
                                                    <input name="Password" placeholder="Password" type="password" required="">                                      
                                                    <div class="sign-up">
                                                        <input type="submit" value="Sign in"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>  

                                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="#" method="post">         
                                                    <input placeholder="Name" name="Name" type="text" required="">
                                                    <input placeholder="Email Address" name="Email" type="email" required="">   
                                                    <input placeholder="Password" name="Password" type="password" required="">  
                                                    <input placeholder="Confirm Password" name="Password" type="password" required="">
                                                    <div class="sign-up">
                                                        <input type="submit" value="Create Account"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>                                                            
                                </div>  
                            </div>
                            <div id="OR" class="hidden-xs">OR</div>
                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <div class="row text-center sign-with">
                                <div class="col-md-12">
                                    <h3 class="other-nw">
                                        Sign in with</h3>
                                </div>
                                <div class="col-md-12">
                                    <ul class="social">
                                        <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                        <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                        <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                                        <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">         
            <div class="w3l_logo">
                <h1><a href="<?php print base_url();?>">Lorem empsum <span> Lorem Empsum </span></a></h1>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php print base_url();?> " class="act">Home</a></li>   
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Clothing</h6>
                                            <li><a href="<?php print site_url('products');?>">Dresses<span>New</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Ethnic Wear</h6>
                                            <li><a href="salwars.html">Salwars</a></li>
                                            <li><a href="sarees.html">Sarees<span>New</span></a></li>
                                            <li><a href="products.html"><i>Summer Store</i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                        <ul class="multi-column-dropdown">
                                            <h6>Foot Wear</h6>
                                            <li><a href="sandals.html">Flats</a></li>
                                            <li><a href="sandals.html">Sandals</a></li>
                                            <li><a href="sandals.html">Boots</a></li>
                                            <li><a href="sandals.html">Heels</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w3ls_products_pos">
                                            <h4>50%<i>Off/-</i></h4>
                                            <img src="<?php print site_url('resources/front/img/1.jpg');?>" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="<?php print site_url('contact');?>">Mail Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!-- //header -->
