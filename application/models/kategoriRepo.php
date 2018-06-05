<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 7:54 PM
 */

class kategoriRepo extends CI_Model{
	public function getAll()
	{
		return $this->db->get('kategori');
	}
}
