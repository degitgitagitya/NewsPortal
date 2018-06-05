<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewAll()->result();
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	public function secondary($key)
	{
		return $this->newsRepo->getViewBy($key)->result();
	}
}
