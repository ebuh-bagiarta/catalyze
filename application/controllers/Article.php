<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_article');
	}
	public function index()
	{
		$data['article'] = $this->model_article->get();
		$this->load->view('admin');
		$this->load->view('article_list', $data);
		$this->load->view('footer');
	}
	public function create()
	{
		$this->load->view('admin');
		$this->load->view('article_input');
		$this->load->view('footer');
	}
	public function store(){
		$data['title']=$this->input->post('title');
		$data['description']=$this->input->post('description');
		$data['date']=$this->input->post('date');
		$data['image']=$this->input->post('image');


		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());

		}
		else
		{
				$data['image']=$this->upload->data('file_name');   
		}
		$this->model_article->store($data);	
			echo "success";
		redirect('article');


	}
	public function edit(){
		$id = $this->uri->segment(3);
		$data['article']=$this->model_article->get_article($id);
		$this->load->view('admin');
		$this->load->view('article_edit',$data);
		$this->load->view('footer');	

	}
	public function update(){
		$id=$this->input->post('id');
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image'))
		{
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			//$this->load->view('upload_form', $error);
		}
		else
		{
			$article = $this->model_article->get_article($id);
			unlink("assets/upload/".$article->row('image'));
			$data['image']=$this->upload->data('file_name');   

		}
		$data['title']=$this->input->post('title');
		$data['description']=$this->input->post('description');
		$data['date']=$this->input->post('date');
		$this->model_article->update($id,$data);
		redirect('article');
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$article = $this->model_article->get_article($id);
		$file = "assets/upload/".$article->row('image');
		if(file_exists($file)){
			unlink($file);
		}
        
		$this->model_article->delete($id);	
		redirect('article');
	}
}
