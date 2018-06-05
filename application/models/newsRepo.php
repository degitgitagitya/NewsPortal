<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 8:11 PM
 */

class newsRepo extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('news');
	}

	public function getViewAll()
	{
		return $this->db->query("SELECT news.id,judul,isi,tanggal,username,kategori.namaKategori,image.namaImage,trending FROM image,kategori,news,user
		WHERE image.id = news.id_image AND kategori.id = news.id_kategori
		AND user.id = news.id_user order by tanggal desc");
	}

	public function getViewBy($kategori)
	{
		return $this->db->query("SELECT news.id,judul,isi,tanggal,username,kategori.namaKategori,image.namaImage,trending FROM image,kategori,news,user
		WHERE image.id = news.id_image AND kategori.id = news.id_kategori
		AND user.id = news.id_user AND kategori.namaKategori = '".$kategori."' order by tanggal desc");
	}

	public function getViewSearch($cari)
	{
		return $this->db->query("SELECT news.id,judul,isi,tanggal,username,kategori.namaKategori,image.namaImage,trending FROM image,kategori,news,user
		WHERE image.id = news.id_image AND kategori.id = news.id_kategori
		AND user.id = news.id_user AND judul LIKE '%".$cari."%' order by tanggal desc");
	}

	public function getViewByID($id)
	{
		return $this->db->query("SELECT news.id,judul,isi,tanggal,username,kategori.namaKategori,image.namaImage,trending FROM image,kategori,news,user
		WHERE image.id = news.id_image AND kategori.id = news.id_kategori
		AND user.id = news.id_user AND news.id = ".$id." order by tanggal desc");
	}

	public function insert($judul,$isi,$tanggal,$idUser,$idKategori,$idImage,$trending)
	{
		$data = array(
			'judul' => $judul,
			'isi' => $isi,
			'tanggal' => $tanggal,
			'id_user' => $idUser,
			'id_kategori' => $idKategori,
			'id_image' => $idImage,
			'trending' => $trending
		);

		$this->db->insert('news',$data);
	}

	public function delete($id)
	{
		$this->db->delete('news', array('id' => $id));
	}

	public function update($id,$judul,$isi,$tanggal,$idUser,$idKategori,$idImage,$trending)
	{
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'isi' => $isi,
			'tanggal' => $tanggal,
			'id_user' => $idUser,
			'id_kategori' => $idKategori,
			'id_image' => $idImage,
			'trending' => $trending
		);

		$this->db->replace('news', $data);
	}
}
