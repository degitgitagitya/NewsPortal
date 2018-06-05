<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['news'] = $this->newsRepo->getViewAll()->result();
		$this->load->view('headeradmin');
		$this->load->view('panel',$data);
	}

	public function addNews()
	{
		$data['news'] = $this->newsRepo->getViewAll()->result();
		$this->load->view('headeradmin');
		$this->load->view('writenews');
	}

	public function deleteNews($id)
	{
		$this->imageRepo->delete($id);
		$this->newsRepo->delete($id);
		$data['news'] = $this->newsRepo->getViewAll()->result();
		$this->load->view('headeradmin');
		$this->load->view('panel',$data);
	}

	public function editNews($id)
	{
		$data['news'] = $this->newsRepo->getViewByID($id)->result();
		$this->load->view('headeradmin');
		$this->load->view('editnews',$data);
	}
}
