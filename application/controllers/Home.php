<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_article');
	}

	public function index(){
		$data['article'] = $this->model_article->get();
		$this->load->view('home',$data);	
	}
}