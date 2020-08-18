<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class func_admin extends CI_Controller {

	public function index()
	{
		
	}
	public function pendapatan(){
		$id = $this->input->post('id');
		if ($id != '') {
			$data =[
			 	'sumber'	=> $this->input->post('sumber'),
			 	'jumlah'	=> $this->input->post('jumlah'),
			 	'tanggal'	=> $this->input->post('tgl')
			];
			$this->db->where('id',$id);
			$q = $this->db->update('pendapatan',$data);

			if ($q) {
				redirect('Admin/view_pendapatan');
			}
		}else{

			$data =[
				 	'sumber'	=> $this->input->post('sumber'),
				 	'jumlah'	=> $this->input->post('jumlah'),
				 	'tanggal'	=> $this->input->post('tgl')
			];
			$q = $this->db->insert('pendapatan',$data);

			if ($q) {
				redirect('Admin/view_pendapatan');
			}
		}

	}
	public function del_pendapatan($id){
		if (!empty($id)) {
			$this->db->delete('pendapatan',['id'=>$id]);
			redirect('Admin/view_pendapatan');
		}
	}

	public function pengeluaran(){
		$id = $this->input->post('id');
		if ($id != '') {
			$data =[
			 	'di_pergunakan'	=> $this->input->post('pengeluaran'),
			 	'jumlah'	=> $this->input->post('jumlah'),
			 	'tanggal'	=> $this->input->post('tgl')
			];
			$this->db->where('id',$id);
			$q = $this->db->update('pengeluaran',$data);

			if ($q) {
				redirect('Admin/view_pendapatan');
			}
		}else{

			$data =[
				 	'di_pergunakan'	=> $this->input->post('pengeluaran'),
				 	'jumlah'	=> $this->input->post('jumlah'),
				 	'tanggal'	=> $this->input->post('tgl')
			];
			$q = $this->db->insert('pengeluaran',$data);

			if ($q) {
				redirect('Admin/view_pengeluaran');
			}
		}
	}
	public function del_pengeluaran($id){
		if (!empty($id)) {
			$this->db->delete('pengeluaran',['id'=>$id]);
			redirect('Admin/view_pengeluaran');
		}
	}
	public function pembangunan(){
		$id = $this->input->post('id');
		$v = $this->db->get_where('pembangunan',['id'=>$id])->row_array();
		$vs = [
				'di_pergunakan'	=> $v['pembangunan'],
				'jumlah'	=> $v['biaya'],
				'tanggal'	=> $v['tanggal']
				];
		if (!empty($id)) {
			$imgs = $this->input->post('img');
			$gambars = $this->up_imagess('img','./assets/img/pembangunan/');
			if (empty($gambars)) {
				$gambar = $imgs;
			}else{
				$gambar = $gambars;
			}
			$data = [
			'pembangunan'	=> $this->input->post('pembangunan'),			 
			'jenis'			=> $this->input->post('jenis'),	
			'lokasi'		=> $this->input->post('lokasi'),		
			'koordinat'		=> $this->input->post('Koordinat'),		
			'biaya'			=> $this->input->post('biaya'),	
			'img'			=> $gambar,
			'tanggal'		=> $this->input->post('tgl')		 
			];


			$uk = [
				'di_pergunakan'	=> $this->input->post('pembangunan'),
			 	'jumlah'	=> $this->input->post('biaya'),
			 	'tanggal'	=> $this->input->post('tgl')
			];

			$this->db->where($vs);
			$ins = $this->db->update('pengeluaran',$uk);			

			$this->db->where('id',$id);
			$ins = $this->db->update('pembangunan',$data);
			if ($ins) {
				redirect('Admin/view_pembangunan');
			}
		}else{

			$data = [
				'pembangunan'	=> $this->input->post('pembangunan'),			 
				'jenis'			=> $this->input->post('jenis'),	
				'lokasi'		=> $this->input->post('lokasi'),		
				'koordinat'		=> $this->input->post('Koordinat'),		
				'biaya'			=> $this->input->post('biaya'),
				'img'			=> $this->up_imagess('img','./assets/img/pembangunan/'),	
				'tanggal'		=> $this->input->post('tgl')		 
			];



			$uk = [

				'di_pergunakan'	=> $this->input->post('pembangunan'),
			 	'jumlah'	=> $this->input->post('biaya'),
			 	'tanggal'	=> $this->input->post('tgl')
			];


			$ins = $this->db->insert('pengeluaran',$uk);
			$ins = $this->db->insert('pembangunan',$data);
			if ($ins) {
				redirect('Admin/view_pembangunan');
			}
		}
	}
	public function del_pembangunan($id){
		$v = $this->db->get_where('pembangunan',['id'=>$id])->row_array();
		$vs = [
				'di_pergunakan'	=> $v['pembangunan'],
				'jumlah'	=> $v['biaya'],
				'tanggal'	=> $v['tanggal']
				];
		$this->db->delete('pengeluaran',$vs);
		$this->db->delete('pembangunan',['id'=>$id]);
		redirect('Admin/view_pembangunan');
	}
	public function ins_berita(){
		$id = $this->input->post('id');
		if (!empty($id)) {
			$vw = $this->input->post('vw');
			$data= [
			'judul'		=> $this->input->post('judul'),
			'thm'		=> $this->input->post('thumbnail'),
			'berita'	=> $this->input->post('editor'),	
			'view'		=> $vw,
			'tanggal'	=> date("y-m-d h:i:s")
			];
			$this->db->where('id',$id);
			$ins = $this->db->update('berita',$data);
			if ($ins) {
				redirect('Admin/view_berita');
			}
		}else{
			$data= [
			'judul'		=> $this->input->post('judul'),
			'thm'		=> $this->input->post('thumbnail'),
			'berita'	=> $this->input->post('editor'),	
			'view'		=> 0,
			'tanggal'	=> date("y-m-d h:i:s")
			];
			$ins = $this->db->insert('berita',$data);
			if ($ins) {
				redirect('Admin/view_berita');
			}
		}
		
	}
	public function del_berita($id){
		$this->db->delete('berita',['id'=>$id]);
		redirect('Admin/view_berita');
	}
	public function ins_profil(){

		$data=[
			'profil'	=> $this->input->post('editor1'),
			'cover'		=> $this->up_imagess('cov','./assets/img/profil/'),
			'visi'		=> $this->input->post('editor2'),
			'misi'		=> $this->input->post('editor3'),
			'koordinat' => $this->input->post('xy'),
			'struktur'	=> $this->up_imagess('st','./assets/img/profil/')
			];
	    $sl = $this->db->get('profil')->num_rows();
	    if ($sl == 0) {
	     	$d = $this->db->insert('profil',$data);
	     	if ($d) {
	     		redirect('admin');
	     	}
	     }else{
	     	$d = $this->db->update('profil',$data);
	     	if ($d) {
	     		redirect('admin');
	     	}
	     }

		
	}
	public function login(){
		$data = [
			'username' => $this->input->post('u'),
			'password' => $this->input->post('p')
		];
		$log = $this->db->get_where('admin',$data)->num_rows();
		if ($log == 1) {
			$this->session->set_userdata('admin',$data['username']);
			$ses = $this->session->userdata('admin');
			if ($ses) {
				redirect('Admin');
			}else{
				$this->session->set_userdata('fls',"<div class='alert alert-danger' role='alert'>Login Gagal</div>");
				redirect('Admin/login');
			}
		}
		else{
				$this->session->set_userdata('fls',"<div class='alert alert-danger' role='alert'>Login Gagal</div>");
				redirect('Admin/login');
			}
	}
	


// =================ajax & fungsi lain ==================================

	public function img_upload(){
		$nama = $this->up_imagess('file','./assets/img/uploaded/');
		echo str_replace(' ', '', $nama);
	}

   


// ======================================================================
	public function up_imagess($imges = null , $thm =null){
			$config['upload_path']          = $thm; 
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 500000;
			$config['overwrite']=TRUE;
			$config['encrypt_name'] = TRUE;
			$new_name = time();
			$config['file_name'] = $new_name;

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        // ------------------------------------------
	       if ( ! $this->upload->do_upload($imges)){
	           $error = array('error' => $this->upload->display_errors());
	            //echo "Foto harus di upload paling tida satu";
			}else{
				$image = $this->upload->data('file_name');
	            return  $image;
			}
 		}
}
