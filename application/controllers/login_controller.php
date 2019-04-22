<?php

class login_controller extends CI_Controller{



	function index(){
		$this->load->view('home');
	}

	function register(){
		$this->load->view('signup_view');
	}

	function checkout(){
		$this->load->view('checkout');
	}

	function login(){
		$this->load->view('login_view');
	}

	function order(){
		$this->load->view('ordernew');
	}

	function profile(){
		$this->load->view('profilenew');
	}

	function product(){
		$this->load->view('productnew');
	}

	function shipping(){
		$this->load->view('shipping_view');
	}

	function submitdesign(){
		$this->load->view('submitdesign_view');
	}
}
