<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/index');
		 $this->load->view('users/template/footer');
	}
	public function u_masuk()
	{
		$cari = $this->input->get('cari');
		$data['val_c'] = $cari;

		if (!empty($cari)) {
			$this->db->like('tanggal',$cari);
			$data['pen'] = $this->db->get('pendapatan')->result();

			$this->db->like('tanggal',$cari);
			$this->db->select('SUM(jumlah) as total');
			$this->db->from('pendapatan');
			$data['tot_p'] = $this->db->get()->row()->total;
		}else{
			$this->db->order_by("tanggal", "ASC");
			$data['pen'] =$this->db->get('pendapatan')->result();



		}

		
		// ==================================================

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pendapatan');
		$data['total'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as totals');
		$this->db->from('pengeluaran');
		$kel = $this->db->get()->row()->totals;
		$data['totals'] = $data['total']- $kel;



		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/u_masuk',$data);
		 $this->load->view('users/template/footer');
	}
	public function u_keluar()
		{
		$cari = $this->input->get('cari');
		$data['val_c'] = $cari;

		if (!empty($cari)) {
			$this->db->like('tanggal',$cari);
			$data['pen'] = $this->db->get('pengeluaran')->result();

			$this->db->like('tanggal',$cari);
			$this->db->select('SUM(jumlah) as total');
			$this->db->from('pengeluaran');
			$data['tot_p'] = $this->db->get()->row()->total;
		}else{
			$this->db->order_by("tanggal", "ASC");
			$data['pen'] =$this->db->get('pengeluaran')->result();



		}

		
		// ==================================================

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pengeluaran');
		$data['total'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pendapatan');
		$data['p'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as totals');
		$this->db->from('pengeluaran');
		$kel = $this->db->get()->row()->totals;
		$data['totals'] = $data['p'] - $kel;



		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/u_keluar',$data);
		 $this->load->view('users/template/footer');
	}
	public function u_pembangunan(){
		$cari = $this->input->get('cari');
		$data['val_c'] = $cari;

		if (!empty($cari)) {
			$this->db->like('tanggal',$cari);
			$data['pen'] = $this->db->get('pembangunan')->result();

			$this->db->like('tanggal',$cari);
			$this->db->select('SUM(biaya) as total');
			$this->db->from('pembangunan');
			$data['tot_p'] = $this->db->get()->row()->total;
		}else{
			$this->db->order_by("tanggal", "ASC");
			$data['pen'] =$this->db->get('pembangunan')->result();



		}

		
		// ==================================================

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pengeluaran');
		$data['total'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pendapatan');
		$data['p'] = $this->db->get()->row()->total;

		$this->db->select('SUM(biaya) as total');
		$this->db->from('pembangunan');
		$data['pembangunans'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as totals');
		$this->db->from('pengeluaran');
		$kel = $this->db->get()->row()->totals;
		$data['totals'] = $data['p'] - $kel;



		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/u_pembangunan',$data);
		$this->load->view('users/template/footer');
	}
	public function lok($id){

		$da = $this->db->get_where('pembangunan',['id'=>$id])->row_array();

		$this->load->library('googlemaps');

		$config['center'] = $da['koordinat'];
		$config['zoom'] = '15';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = $da['koordinat'];
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();



		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/maps',$data);
		$this->load->view('users/template/footer');
	}
	public function lap(){
		$cari = $this->input->get('cari');
		$data['val_c'] = $cari;

		if (!empty($cari)) {
			$this->db->like('tanggal',$cari);
			$data['pen'] = $this->db->get('pembangunan')->result();

			$this->db->like('tanggal',$cari);
			$this->db->select('SUM(biaya) as total');
			$this->db->from('pembangunan');
			$data['tot_p'] = $this->db->get()->row()->total;
		}else{
			// $this->db->order_by("tanggal", "ASC");
			$data['pen'] =$this->db->get('pendapatan')->result();
		}

		
		// ==================================================

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pengeluaran');
		$data['total'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as total');
		$this->db->from('pendapatan');
		$data['p'] = $this->db->get()->row()->total;

		$this->db->select('SUM(biaya) as total');
		$this->db->from('pembangunan');
		$data['pembangunans'] = $this->db->get()->row()->total;

		$this->db->select('SUM(jumlah) as totals');
		$this->db->from('pengeluaran');
		$kel = $this->db->get()->row()->totals;
		$data['totals'] = $data['p'] - $kel;


		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/lap',$data);
		$this->load->view('users/template/footer');
		//var_dump($data['pen']);
	}

	public function profil(){
		$data['prof'] = $this->db->get_where('profil')->row_array();
		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/profil',$data);
		$this->load->view('users/template/footer');
	}
	public function berita(){
		$data['berita'] = $this->db->get_where('berita')->result_array();
		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/berita',$data);
		$this->load->view('users/template/footer');
	}
	public function s_berita($id = null){
		$data['berita'] = $this->db->get_where('berita',['id'=>$id])->row_array();
		$this->load->view('users/template/header');
		$this->load->view('users/template/navigasi');
		$this->load->view('users/konten/s_berita',$data);
		$this->load->view('users/template/footer');
	}
}
