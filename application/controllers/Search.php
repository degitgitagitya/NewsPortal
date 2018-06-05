<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{

	}

	public function sepa()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewBy("Sepak Bola")->result();
		$data['head'] = "Sepak Bola";
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function bask()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewBy("Basket")->result();
		$data['head'] = "Basket";
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function golf()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewBy("Golf")->result();
		$data['head'] = "Golf";
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function teni()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewBy("Tenis")->result();
		$data['head'] = "Tenis";
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function moto()
	{
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewBy("Moto GP")->result();
		$data['head'] = "Moto GP";
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function cari()
	{
		$cari = $this->input->get('cari');
		$data['kategori'] = $this->kategoriRepo->getAll()->result();
		$data['news'] = $this->newsRepo->getViewSearch($cari)->result();
		if (!empty($_SESSION['fav'])){

			$data['second'] = $this->secondary($_SESSION['fav']);
		}
		$data['head'] = "Hasil Pencarian";
		$this->load->view('header',$data);
		$this->load->view('search',$data);
		$this->load->view('footer');
	}

	public function secondary($key)
	{
		return $this->newsRepo->getViewBy($key)->result();
	}
}
