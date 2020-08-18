 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$ses = $this->session->userdata('admin');
		if (empty($ses)) {
			redirect('Admin/login');
		}

		$data['charts'] = $this->db->query("SELECT tanggal,SUM(jumlah) as total FROM pendapatan GROUP BY DATE_FORMAT(tanggal, '%Y%')")->result_array();
		$data['charts2'] = $this->db->query("SELECT tanggal,SUM(biaya) as total FROM pembangunan GROUP BY DATE_FORMAT(tanggal, '%Y%')")->result_array();
		$data['charts3'] = $this->db->query("SELECT tanggal,SUM(jumlah) as total FROM pengeluaran GROUP BY DATE_FORMAT(tanggal, '%Y%')")->result_array();
		//var_dump($data['charts']);
		//$data['charts'] = $this->db->get('pendapatan')->;

		$array = array();
		foreach ($data['charts'] as $key ) {
			 array_push($array, $key['total']);
		}

		$data['maxs'] = max($array);


		$da = '';
		foreach ($data['charts'] as $key ) {
			$thn = explode('-', $key['tanggal']);
			$per = $key['total'];

			$da .= "{ y:'".$thn[0]."', a:".$per."},";

			 
		}

		$data['chart']= substr($da, 0, -1);


		$array = array();
		foreach ($data['charts2'] as $key ) {
			 array_push($array, $key['total']);
		}

		$data['maxs'] = max($array);


		$da = '';
		foreach ($data['charts2'] as $key ) {
			$thn = explode('-', $key['tanggal']);
			$per = $key['total'];

			$da .= "{ y:'".$thn[0]."', a:".$per."},";

			 
		}

		$data['charts_']= substr($da, 0, -1);


		// ===
		


		$array3 = array();
		foreach ($data['charts3'] as $key ) {
			 array_push($array3, $key['total']);
		}

		


		$da3 = '';
		foreach ($data['charts3'] as $key ) {
			$thn = explode('-', $key['tanggal']);
			$per = $key['total'];

			$da3 .= "{ y:'".$thn[0]."', a:".$per."},";

			 
		}

		$data['chart__']= substr($da3, 0, -1);



		

		

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/index',$data);
		$this->load->view('admin/template/footer');
	}
	public function pendapatan($id = null){
		$data['ed'] = $this->db->get_where('pendapatan',['id'=>$id])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/pendapatan',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_pendapatan(){
		$cari = $this->input->get('cari');
		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['all'] = $this->db->get('pendapatan')->result();
		}else{
			$data['all'] = $this->db->get('pendapatan')->result();
		}
		

		

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/view_pendapatan',$data);
		$this->load->view('admin/template/footer');
	}
	public function pengeluaran($id = null){

		$data['peng'] = $this->db->get_where('pengeluaran',['id'=>$id])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/pengeluaran',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_pengeluaran(){
		$cari = $this->input->get('cari');
		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['all'] = $this->db->get_where('pengeluaran')->result();
		}else{
			$data['all'] = $this->db->get_where('pengeluaran')->result();
		}
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/view_pengeluaran',$data);
		$this->load->view('admin/template/footer');
	}
	public function pembangunan($id= null){
	
		if ($id != null) {
			$data['pem'] = 	$this->db->get_where('pembangunan',['id'=>$id])->row_array();
		}

		$config['center'] = '-0.469038, 101.523314';
		$config['zoom'] = '10';
		$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng }); document.getElementById(\'xy\').value = event.latLng.lat()+\',\'+event.latLng.lng();';
			$this->googlemaps->initialize($config);
		$config['map_height'] = '300px';
		if ($id != null) {
			$marker = array();
			$marker['position'] = $data['pem']['koordinat'];
			$this->googlemaps->add_marker($marker);
		}
		$this->googlemaps->initialize($config);

		
		$data['map'] = $this->googlemaps->create_map();



		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');

		$this->load->view('admin/konten/pembangunan',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_pembangunan(){
		$cari = $this->input->get('cari');
		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['all'] = $this->db->get_where('pembangunan')->result();
		}else{
			$data['all'] = $this->db->get_where('pembangunan')->result();
		}
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/view_pembangunan',$data);
		$this->load->view('admin/template/footer');
	}
	public function berita($id = null){
		$data['berita'] = $this->db->get_where('berita',['id'=>$id])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/berita',$data);
		$this->load->view('admin/template/footer');
	}
	public function view_berita(){
		$data['all'] = $this->db->get_where('berita')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/view_berita',$data);
		$this->load->view('admin/template/footer');
	}
	public function inp_profil(){

		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng }); document.getElementById(\'xy\').value = event.latLng.lat()+\',\'+event.latLng.lng();';
			$this->googlemaps->initialize($config);
		$config['map_height'] = '300px';

		
		$data['map'] = $this->googlemaps->create_map();
		
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/inp_profil',$data);
		$this->load->view('admin/template/footer');
	}
	public function lokasi__($id){

		$da = $this->db->get_where('pembangunan',['id'=>$id])->row_array();

		$this->load->library('googlemaps');

		$config['center'] = $da['koordinat'];
		$config['zoom'] = '15';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = $da['koordinat'];
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();


		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/lokasi_p',$data);
		$this->load->view('admin/template/footer');
	}

	public function arr(){

		$this->db->from('pendapatan');
		$query1 = $this->db->get()->result_array();


		$this->db->from('pengeluaran');
		$query2 = $this->db->get()->result_array();



		
	}

	public function u_masuk(){
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



		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/u_masuk',$data);
		$this->load->view('admin/template/footer');
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



		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/u_keluar',$data);
		$this->load->view('admin/template/footer');
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



		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/konten/u_pembangunan',$data);
		$this->load->view('admin/template/footer');

	}

	// ======================Laporan==============

	public function laporan_u_m(){
		$data['all'] = $this->db->get_where('pendapatan')->result();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navigasi');
		$this->load->view('admin/laporan/laporan_uang_masuk',$data);
		$this->load->view('admin/template/footer');
	}
	public function lap_masuk($cari = null){
		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['data'] = $this->db->get('pendapatan')->result_array();
			$this->db->like('tanggal',$cari);
		    $this->db->select('SUM(jumlah) as total');
			$this->db->from('pendapatan');
		    $data['sums'] = $this->db->get()->row()->total;

		}else{
			$data['data'] = $this->db->get('pendapatan')->result_array();
		    $this->db->select('SUM(jumlah) as total');
			$this->db->from('pendapatan');
		    $data['sums'] = $this->db->get()->row()->total;
		}
		    

		    $this->mypdf->generate('admin/konten/laporan_um', $data, 'laporan-mahasiswa', 'A4', 'Portrain');
	}

	public function lap_keluar($cari = null){

		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['data'] = $this->db->get('pengeluaran')->result_array();
			$this->db->like('tanggal',$cari);
		    $this->db->select('SUM(jumlah) as total');
			$this->db->from('pengeluaran');
		    $data['sums'] = $this->db->get()->row()->total;

		}else{
			$data['data'] = $this->db->get('pengeluaran')->result_array();
		    $this->db->select('SUM(jumlah) as total');
			$this->db->from('pengeluaran');
		    $data['sums'] = $this->db->get()->row()->total;
		}

		$this->mypdf->generate('admin/konten/laporan_uk', $data, 'laporan-mahasiswa', 'A4', 'Portrain');
	}
	public function lap_pembangunan($cari=null){

		if ($cari != null) {
			$this->db->like('tanggal',$cari);
			$data['data'] = $this->db->get('pembangunan')->result();
			$this->db->like('tanggal',$cari);
		    $this->db->select('SUM(biaya) as total');
			$this->db->from('pembangunan');
		    $data['sums'] = $this->db->get()->row()->total;

		}else{
			$data['data'] = $this->db->get('pembangunan')->result();
		    $this->db->select('SUM(biaya) as total');
			$this->db->from('pembangunan');
		    $data['sums'] = $this->db->get()->row()->total;
		}

		$this->mypdf->generate('admin/konten/laporan_pem', $data, 'laporan-mahasiswa', 'A4', 'landscape');
	}
	public function login(){
		
		$this->load->view('admin/konten/login');
		

	}
	public function unions(){
		
	}
	public function logout(){
		session_destroy();
		redirect('Admin');
	}

	
}
