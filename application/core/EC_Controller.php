<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EC_Controller
 *
 * @author vijay
 */
class EC_AdminController extends EC_Common {

  public function __construct() {
    parent::__construct();
  }
}

class EC_Common extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }
}

class EC_Controller extends EC_Common{

  public $js,$css,$external_js,$external_css = [];

  public function __construct(){
    parent::__construct();
    $this->load_media();
  }

  public function load_media()
  {
    $this->external_js = [
      'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
      'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
      'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
      'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
      'https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
    ];    
    $this->js =[
      'resources/front/js/simpleCart.min.js',
      'resources/front/js/easyResponsiveTabs.js',
      'resources/front/js/jquery.magnific-popup.js',
      'resources/front/js/ecommerce.js',
    ];
    $this->external_css =[
      'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
      'http://fonts.googleapis.com/css?family=Glegoo:400,700',
      'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic',
      'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic',
      'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
      'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
      'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css',
    ];
    $this->css = [
      'resources/front/css/fasthover.css',
      'resources/front/css/jquery.countdown.css',
      'resources/front/css/pace-theme-corner-indicator.css',
      'resources/front/css/style.css',
    ];

    $this->js = array_merge($this->external_js,array_map('site_url',$this->js));
    $this->css = array_merge($this->external_css,array_map('site_url',$this->css));    
  }

}


