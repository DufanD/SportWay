<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetAllProduk()
	{
		$data = $this->db->query('SELECT * FROM produk');
        return $data->result_array();
	}
    
	// Ini model pencarian

	public function search($input){
		$where = "WHERE nama_produk LIKE CONCAT('%', CONCAT('$input', '%'))";

		return $this->db->query('SELECT * FROM produk '.$where)->result_array();
	}

	// Ini model CRUD Pelanggan atau Register

	public function GetPelanggan($name,$phone,$email,$password){
		$where = "WHERE nama_pelanggan='$name' OR telepon_pelanggan='$phone' OR email_pelanggan='$email' OR password_pelanggan='$password'";

		return $this->db->query('SELECT * FROM pelanggan '.$where)->result_array();
	}

    public function register($name,$phone,$email,$password)
	{
		$data = array(
			'nama_pelanggan' => $name,
			'telepon_pelanggan' => $phone,
			'email_pelanggan' => $email,
			'password_pelanggan' => $password
		);
		$this->db->insert('pelanggan', $data);
	}

	// Ini model login

	public function login($email,$password){
		$cek = $this->db->get_where('pelanggan',array(
														'email_pelanggan' => $email,
														'password_pelanggan' => $password
													 ));
		$where = "WHERE email_pelanggan='$email' AND password_pelanggan='$password'";
		if($cek->num_rows()>0){
			return $this->db->query('SELECT id_pelanggan, nama_pelanggan FROM pelanggan '.$where)->result_array();
		} else {
			return 0;
		}
	}

	// Ini model Basket

    public function GetBasket()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket"');
        return $data->result_array();
	}
    
	public function GetBasketSepatu()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Sepatu%"');
        return $data->result_array();
	}

	public function GetBasketBola()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Bola%"');
        return $data->result_array();
	}

	public function GetBasketJersey()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Jersey%"');
        return $data->result_array();
	}

		public function GetBasketJerseyL()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Jersey%" AND filter_produk="Laki-Laki"');
	        return $data->result_array();
		}

		public function GetBasketJerseyP()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Jersey%" AND filter_produk="Perempuan"');
	        return $data->result_array();
		}

		public function GetBasketJerseyA()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Jersey%" AND filter_produk="Anak-Anak"');
	        return $data->result_array();
		}

	public function GetBasketAtribut()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Atribut%"');
        return $data->result_array();
	}

	public function GetBasketPeralatan()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Basket" AND nama_produk LIKE "Peralatan%"');
        return $data->result_array();
	}

	// Ini model Futsal

    public function GetFutsal()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal"');
        return $data->result_array();
	}
    
	public function GetFutsalSepatu()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Sepatu%"');
        return $data->result_array();
	}

	public function GetFutsalBola()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Bola%"');
        return $data->result_array();
	}

	public function GetFutsalJersey()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Jersey%"');
        return $data->result_array();
	}

		public function GetFutsalJerseyL()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Jersey%" AND filter_produk="Laki-Laki"');
	        return $data->result_array();
		}

		public function GetFutsalJerseyP()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Jersey%" AND filter_produk="Perempuan"');
	        return $data->result_array();
		}

		public function GetFutsalJerseyA()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Jersey%" AND filter_produk="Anak-Anak"');
	        return $data->result_array();
		}

	public function GetFutsalAtribut()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Atribut%"');
        return $data->result_array();
	}

	public function GetFutsalPeralatan()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Futsal" AND nama_produk LIKE "Peralatan%"');
        return $data->result_array();
	}

	// Ini model Renang

    public function GetRenang()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang"');
        return $data->result_array();
	}

	public function GetRenangJersey()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Baju_Renang%"');
        return $data->result_array();
	}

		public function GetRenangJerseyL()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Baju_Renang%" AND filter_produk="Laki-Laki"');
	        return $data->result_array();
		}

		public function GetRenangJerseyP()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Baju_Renang%" AND filter_produk="Perempuan"');
	        return $data->result_array();
		}

		public function GetRenangJerseyA()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Baju_Renang%" AND filter_produk="Anak-Anak"');
	        return $data->result_array();
		}

		public function GetRenangJerseyM()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Baju_Renang%" AND filter_produk="Muslimah"');
	        return $data->result_array();
		}

	public function GetRenangAtribut()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Atribut%"');
        return $data->result_array();
	}

	public function GetRenangPeralatan()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Renang" AND nama_produk LIKE "Peralatan%"');
        return $data->result_array();
	}

	// Ini model Badminton

    public function GetBadminton()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton"');
        return $data->result_array();
	}
    
	public function GetBadmintonSepatu()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Sepatu%"');
        return $data->result_array();
	}

	public function GetBadmintonRaket()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Raket%"');
        return $data->result_array();
	}

	public function GetBadmintonShuttlecock()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Shuttlecock%"');
        return $data->result_array();
	}

	public function GetBadmintonJersey()
	{
		$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Jersey%"');
        return $data->result_array();
	}

		public function GetBadmintonJerseyL()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Jersey%" AND filter_produk="Laki-Laki"');
	        return $data->result_array();
		}

		public function GetBadmintonJerseyP()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Jersey%" AND filter_produk="Perempuan"');
	        return $data->result_array();
		}

		public function GetBadmintonJerseyA()
		{
			$data = $this->db->query('SELECT * FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Jersey%" AND filter_produk="Anak-Anak"');
	        return $data->result_array();
		}

	public function GetBadmintonAtribut()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Atribut%"');
        return $data->result_array();
	}

	public function GetBadmintonPeralatan()
	{
		$data = $this->db->query('SELECT id_produk,jenis_produk,nama_produk,harga_produk,deskripsi_produk,filter_produk,foto_produk FROM produk WHERE jenis_produk="Badminton" AND nama_produk LIKE "Peralatan%"');
        return $data->result_array();
	}
}
