<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 7:44 PM
 */

class news
{
	private $id;
	private $judul;
	private $isi;
	private $tanggal;
	private $id_user;
	private $id_kategori;

	public function __construct()
	{

	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getIdKategori()
	{
		return $this->id_kategori;
	}

	/**
	 * @return mixed
	 */
	public function getIdUser()
	{
		return $this->id_user;
	}

	/**
	 * @return mixed
	 */
	public function getIsi()
	{
		return $this->isi;
	}

	/**
	 * @return mixed
	 */
	public function getJudul()
	{
		return $this->judul;
	}

	/**
	 * @return mixed
	 */
	public function getTanggal()
	{
		return $this->tanggal;
	}

	/**
	 * @param mixed $id_kategori
	 */
	public function setIdKategori($id_kategori)
	{
		$this->id_kategori = $id_kategori;
	}

	/**
	 * @param mixed $tanggal
	 */
	public function setTanggal($tanggal)
	{
		$this->tanggal = $tanggal;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @param mixed $id_user
	 */
	public function setIdUser($id_user)
	{
		$this->id_user = $id_user;
	}

	/**
	 * @param mixed $isi
	 */
	public function setIsi($isi)
	{
		$this->isi = $isi;
	}

	/**
	 * @param mixed $judul
	 */
	public function setJudul($judul)
	{
		$this->judul = $judul;
	}
}
