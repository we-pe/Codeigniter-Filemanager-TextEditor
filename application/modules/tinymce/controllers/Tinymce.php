<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tinymce extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('nativesession');
	}

	function index(){
		redirect('tinymce/secure');
	}

	function secure(){
		$this->nativesession->set('subfolder', '');
		$data['pages'] = 'With security session';
		$this->load->view('tinymce', $data);
	}

	function insecure(){
		$this->nativesession->delete('subfolder');
		$data['pages'] = 'Without security session';
		$this->load->view('tinymce', $data);
	}

}