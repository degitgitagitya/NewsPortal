<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function action()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
		);

		$condition = 0;

		$data = $this->userRepo->getAll()->result();

		foreach ($data as $key)
		{
			if ($key->username == $username && $key->password == $password)
			{
				if ($key->status == "admin")
				{
					$data_session = array(
						'username' => $username,
						'id' => $key->id,
						'fav' => $key->kategori_pilihan,
						'status' => "admin"
					);
				}
				else
				{
					$data_session = array(
						'username' => $username,
						'id' => $key->id,
						'fav' => $key->kategori_pilihan,
						'status' => "user"
					);
				}


				$this->session->set_userdata($data_session);
				$condition = 1;
			}
		}

		if ($condition == 0)
		{
			$data['pesan'] = "Username / Password Salah";
			$this->load->view('login',$data);
		}
		else
		{
			if ($_SESSION['status'] == "user")
			{
				redirect(base_url('index.php/home'));
			}
			else if ($_SESSION['status'] == "admin")
			{

				redirect(base_url('index.php/admin'));
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function daftaraksi()
	{
		$username = $this->input->post('username');
		$pass1 = $this->input->post('password');
		$pass2 = $this->input->post('password2');
		$fav = $this->input->post('kategoripilihan');

		if ($pass1 == $pass2)
		{
			$this->userRepo->insert($username,$pass1,$fav);
			$this->index();
		}
		else
		{
			$data['err'] = "Password tidak cocok";
			$this->load->view('daftar',$data);
		}
	}
}
