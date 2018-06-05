<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}

	public function getByID($id)
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewByID($id)->result();
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('berita',$data);
		$this->load->view('footer');
	}

	public function secondary($key)
	{
		return $this->newsRepo->getViewBy($key)->result();
	}
}
