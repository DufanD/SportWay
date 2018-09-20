<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function insert($table='', $data=''){
		$this->db->insert($table, $data);
	}

	public function get_all($table){
		$this->db->from($table);

		return $this->db->get();
	}

	public function select_all($select, $table){
		$this->db->select($select);
		$this->db->from($table);

		return $this->db->get();
	}

	public function select_where($select, $table, $where){
		$this->db->select($select);
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	public function get_where($table = null, $where = null){
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

	public function update($table = null, $data = null, $where = null){
		$this->db->update($table, $data, $where);
	}

	public function delete($table = null, $where = null){
		$this->db->delete($table, $where);
	}

	public function report($where = ''){
		$this->db->select(array('pb.id_pembelian AS id_pembelian', 'nama_pelanggan', 'kota', 'total_pembelian', 'SUM(biaya) AS biaya'));
		$this->db->from('pembelian pb JOIN pembelian_produk pp ON (pb.id_pembelian = pp.id_pembelian) JOIN pelanggan pl ON (pb.id_pelanggan = pl.id_pelanggan)');
		$this->db->where($where);
		$this->db->group_by('pb.id_pembelian');

		return $this->db->get();
	}

	public function count($table = ''){
		return $this->db->count_all($table);
	}

	public function count_where($table = '', $where = ''){
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->count_all_results();
	}

	public function last($table, $limit, $order){
		$this->db->from($table);
		$this->db->limit($limit);
		$this->db->order_by($order, 'DESC');

		return $this->db->get();
	}	
}
?>