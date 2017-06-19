<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckeditor extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('nativesession');
	}

	function index(){
		redirect('ckeditor/secure');
	}

	function secure(){
		$this->nativesession->set('subfolder', '');
		$data['pages'] = 'With security session';
		$this->load->view('ckeditor', $data);
	}

	function insecure(){
		$this->nativesession->delete('subfolder');
		$data['pages'] = 'Without security session';
		$this->load->view('ckeditor', $data);
	}
}