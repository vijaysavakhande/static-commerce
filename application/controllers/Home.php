<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends EC_Controller {

	public function _construct(){
		parent::_construct();
	}

	public function index(){		
		$homejs = [
			site_url('resources/front/js/home.js'),
		];
		$this->js = array_merge($this->js,$homejs);
		$this->load->render('home/index');
	}

	public function products(){		
		$dressjs = [
			site_url('resources/front/js/products.js'),
		];
		$this->js = array_merge($this->js,$dressjs);
		$this->load->render('home/products');
	}
	public function product_details(){

		$productDetails_css = [
			'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/flexslider.min.css',
		];
		$productDetails_js = [
			site_url('resources/front/js/imagezoom.js'),
			site_url('resources/front/js/easyResponsiveTabs.js'),
			site_url('resources/front/js/productDetails.js'),
			'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider.min.js',
		];
		$this->css = array_merge($this->css,$productDetails_css);
		$this->js = array_merge($this->js,$productDetails_js);
		$this->load->render('home/product_details');
	}
	public function checkout(){
		$dressjs = [
			site_url('resources/front/js/checkout.js'),
		];
		$this->js = array_merge($this->js,$dressjs);
		$this->load->render('home/checkout');
	}
}
