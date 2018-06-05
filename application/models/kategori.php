<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 5/10/2018
 * Time: 7:43 PM
 */

class kategori
{
	private $id;
	private $nama;

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
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getNama()
	{
		return $this->nama;
	}

	/**
	 * @param mixed $nama
	 */
	public function setNama($nama)
	{
		$this->nama = $nama;
	}
}
