<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_App extends CI_Model
{
	// Mengecek Login
	public function cek_akun($kondisi, $nm_tabel)
	{
		// Mendapatkan nilai dari hasil pemeriksaan 
		return $this->db->get_where($nm_tabel, $kondisi);
	}
	// Menghitung Jumlah Data
	public function HitungData($id_data, $nm_table, $kondisi)
	{
		$this->db->select('COUNT(' . $id_data . ') AS N_Data');
		$this->db->from($nm_table);
		$this->db->where($kondisi);
		return $this->db->get();
	}
	// Create ========================================================================================
	// Menambahkan Data ke Database
	public function simpan_data($nm_table, $data)
	{
		$this->db->insert($nm_table, $data);
	}
	// Read ==========================================================================================
	// Menampilkan Data Dari Database
	public function tampil_data($nm_table, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_table);
		$this->db->order_by($field, $order);
		return $this->db->get();
	}
	public function tampil_data_where($nm_table, $kondisi, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_table);
		$this->db->where($kondisi);
		$this->db->order_by($field, $order);
		return $this->db->get();
	}
	// Inner Join
	public function tampil_data_join($nm_tabel, $nm_tabel_join, $on, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	public function tampil_data_join_where($nm_tabel, $nm_tabel_join, $on, $kondisi, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->where($kondisi);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	public function tampil_data_join2($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	public function tampil_data_join2_where($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $kondisi, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->where($kondisi);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	public function tampil_data_join3($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $nm_tabel_join3, $on3, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->join($nm_tabel_join3, $on3);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	public function tampil_data_join3_where($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $nm_tabel_join3, $on3, $kondisi, $field, $order)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->join($nm_tabel_join3, $on3);
		$this->db->where($kondisi);
		$this->db->order_by($field, $order);
		return $query = $this->db->get();
	}
	// Update ========================================================================================
	public function edit_data($nm_table, $kondisi)
	{
		// Mendapatkan nilai dari pengambilan data dari nama tabel dan kondisi yang dikirim 
		return $this->db->get_where($nm_table, $kondisi);
	}
	function edit_data_join($nm_tabel, $nm_tabel_join, $on, $kondisi)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->where($kondisi);
		return $query = $this->db->get();
	}
	function edit_data_join2($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $kondisi)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->where($kondisi);
		return $query = $this->db->get();
	}
	function edit_data_join3($nm_tabel, $nm_tabel_join, $on, $nm_tabel_join2, $on2, $nm_tabel_join3, $on3, $kondisi)
	{
		$this->db->select('*');
		$this->db->from($nm_tabel);
		$this->db->join($nm_tabel_join, $on);
		$this->db->join($nm_tabel_join2, $on2);
		$this->db->join($nm_tabel_join3, $on3);
		$this->db->where($kondisi);
		return $query = $this->db->get();
	}
	public function proses_update($kondisi, $data, $nm_table)
	{
		$this->db->where($kondisi);
		$this->db->update($nm_table, $data);
	}
	// Delete ========================================================================================
	// Menghapus Data Dari Database
	public function hapus_data($nm_table, $kondisi)
	{
		$this->db->where($kondisi);
		$this->db->delete($nm_table);
	}
	// Menghapus File Dari Database dan penyimpanan
	public function hapus_file($kondisi, $data, $nm_table)
	{
		$this->db->where($kondisi);
		$this->db->update($nm_table, $data);
	}

	public function getDataByID($where, $nm_tabel)
	{
		$this->db->where($where);
		return $this->db->get($nm_tabel);
	}

	// Count / Hitung ==================================================================================
	public function hitung_data($id_desa, $where, $data, $nm_table)
	{
		$this->db->select('COUNT('. $id_desa .') AS J_DATA');
		$this->db->from($nm_table);
		$this->db->where($where);
		return $this->db->get();
	}
	public function join_hitung($id_desa, $where, $nm_table, $tb_desa, $join2)
	{
		$this->db->select('*');
		$this->db->from($nm_table);
		$this->db->join($tb_desa, $join2);
		$this->db->where($where);
		return $query = $this->db->get();
	}

	// function hitungDataAssetbyModel($id_desa)
	// {
	// 	$this->db->select('tb_rukun_warga.id_desa');
	// 	$this->db->where('id_desa', $id_desa);
	// 	$query = $this->db->get('tb_rukun_warga');
	// 	if ($query->num_rows() > 0) {
	// 		return $query->num_rows();
	// 	}
	// }

	// function hitungDataModelbyKategori($id_desa)
	// {
	// 	$this->db->select('tb_desa.id_desa');
	// 	$this->db->where('id_desa', $id_desa);
	// 	$query = $this->db->get('tb_desa');
	// 	if ($query->num_rows() > 0) {
	// 		return $query->result();
	// 	}
	// }

	// function hitungDataKategoribyTipe($id_desa)
	// {
	// 	$this->db->select('tb_rukun_warga.id_desa, tb_desa.id_desa');
	// 	$this->db->where('id_desa', $id_desa);
	// 	$this->db->order_by('id_desa', 'asc');
	// 	$query = $this->db->get('tb_rukun_warga');
	// 	if ($query->num_rows() > 0) {
	// 		return $query->result();
	// 	}
	// }
}
