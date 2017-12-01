<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends EC_Controller
{

  public function _construct()
  {
    parent::_construct();
  }

  public function index()
  {
    $homejs = [
      site_url('resources/front/js/home.js'),
    ];
    $this->js = array_merge($this->js, $homejs);
    $this->load->render('home/index');
  }

  public function products()
  {
    $dressjs = [
      site_url('resources/front/js/products.js'),
    ];
    $this->js = array_merge($this->js, $dressjs);
    $this->load->render('home/products');
  }
  public function product_details()
  {
    $productDetails_js = [
      site_url('resources/front/js/imagezoom.js'),
      site_url('resources/front/js/easyResponsiveTabs.js'),
      site_url('resources/front/js/productDetails.js'),
    ];
    $this->js = array_merge($this->js, $productDetails_js);
    $this->load->render('home/product_details');
  }
  public function checkout()
  {
    $dressjs = [
      site_url('resources/front/js/checkout.js'),
    ];
    $this->js = array_merge($this->js, $dressjs);
    $this->load->render('home/checkout');
  }
  public function contact()
  {
    $post = $this->input->post(Null,true);
    $this->load->library('EC_Custom',$this->config->config);
    $this->custom_lib->send_email();
    if (!empty($post)) {
    	
    }
    $contactcss = [
    	'//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css',
    ];
    $contactjs = [
    	'//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js',
    	site_url('resources/front/js/contact.js'),
    ];
    $this->css = array_merge($this->css, $contactcss);
    $this->js = array_merge($this->js, $contactjs);
    $this->load->render('home/contact');
  }
}
