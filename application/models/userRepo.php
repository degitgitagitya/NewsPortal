<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 8:11 PM
 */

class userRepo extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('user');
	}

	public function insert($username, $password, $kategori)
	{
		$data = array(
			'username' => $username,
			'password' => $password,
			'status' => "user",
			'kategori_pilihan' => $kategori
		);

		$this->db->insert('user', $data);
	}
}
