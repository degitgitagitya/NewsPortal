<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{

	}

	public function do_upload()
	{
		$config['upload_path']          = './assets/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 5000;
		$config['max_width']            = 2024;
		$config['max_height']           = 1768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('pesan' => $this->upload->display_errors());

			$this->load->view('headeradmin');
			$this->load->view('info', $error);
		}
		else
		{
			$data = array('pesan' => $this->upload->data());

			$this->load->view('headeradmin');
			$this->load->view('info', $data);

			foreach ($data as $key)
			{
				$name = $key['file_name'];
			}

		}

		$idImage = rand();
		$this->imageRepo->insert($idImage, $name);



		$judul = $this->input->post('judul');
		$tanggal = date("Y-m-d");
		$isi = $this->input->post('isi');
		$kategori = $this->input->post('kategori');
		$trending = $this->input->post('trending');

		$this->newsRepo->insert($judul,$isi,$tanggal,$_SESSION['id'],$kategori,$idImage,$trending);


	}

	public function do_upload2()
	{
		$config['upload_path']          = './assets/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 5000;
		$config['max_width']            = 2024;
		$config['max_height']           = 1768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('pesan' => $this->upload->display_errors());

			$this->load->view('headeradmin');
			$this->load->view('info', $error);
		}
		else
		{
			$data = array('pesan' => $this->upload->data());

			$this->load->view('headeradmin');
			$this->load->view('info', $data);

			foreach ($data as $key)
			{
				$name = $key['file_name'];
			}

		}

		$idImage = rand();
		$this->imageRepo->insert($idImage, $name);


		$idold = $this->input->post('id');
		$judul = $this->input->post('judul');
		$tanggal = date("Y-m-d");
		$isi = $this->input->post('isi');
		$kategori = $this->input->post('kategori');
		$trending = $this->input->post('trending');

		$this->newsRepo->update($idold,$judul,$isi,$tanggal,$_SESSION['id'],$kategori,$idImage,$trending);


	}

}
