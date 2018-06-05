<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 8:11 PM
 */

class imageRepo extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('image');
	}

	public function insert($id, $nama)
	{
		$data = array(
			'id' => $id,
			'namaImage' => $nama
		);

		$this->db->insert('image', $data);
	}

	public function delete($idNews)
	{
		$data = $this->db->get('news')->result();

		$id = 0;

		foreach ($data as $key)
		{
			if ($idNews == $key->id)
			{
				$id = $key->id_image;
			}
		}

		$this->db->delete('image', array('id' => $id));
	}
}
