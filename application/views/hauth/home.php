<?php
	$this->load->helper('url');
	echo anchor('hauth/login/Google','Login With Google.').'<br />';
	
	echo anchor('hauth/login/Twitter','Login With Twitter.').'<br />';
	
	echo anchor('index.php/hauth/login/Facebook','Login With Facebook.').'<br />';
	
	echo anchor('hauth/login/LinkedIn','Login With LinkedIn.').'<br />';
?>
