<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Modpa');
 
	}
	//melihat pengaturan modul
	public function index()
	{
		$this->load->view('admin/header');
		$data['ma_modul'] = $this->Modpa->tampil_data('ma_modul');
		$this->load->view('admin/view_pengaturan',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_modul(){
		$this->load->view('admin/header');
		$this->load->view('admin/view_tambah_modul');
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_modul(){
		$id_modul		= $this->input->post('id_modul');
		$title_modul	= $this->input->post('title_modul');
		$link_modul		= $this->input->post('link_modul');
		date_default_timezone_get('Asia/Makassar');
		$created_modul	= date("y-m-d h:i:s");
		$modified_modul	= date("y-m-d h:i:s");
		$account_id		= $this->input->post('account_id');

		$data = array(
				'id_modul'		=> $id_modul,
				'title_modul'	=> $title_modul,
				'link_modul'	=> $link_modul,
				'created_modul' => $created_modul,
				'modified_modul'=> $modified_modul,
				'account_id'	=> $account_id
		);
		$res = $this->Modpa->input_data($data,'ma_modul');
		if($res==1){
			redirect('admin/Pengaturan');
		}
		else{
			echo "gagal";		
		}
	}
	public function edit_modul($id_modul){
		$where = array('id_modul' => $id_modul);

		$this->load->view('admin/header');
		$data['ma_modul'] = $this->Modpa->edit_data($where,'ma_modul')->result();
		$this->load->view('admin/view_edit_modul',$data);
		$this->load->view('admin/footer');
	}
	public function update_modul(){
		$id_modul		= $this->input->post('id_modul');
		$title_modul	= $this->input->post('title_modul');
		$link_modul		= $this->input->post('link_modul');
		date_default_timezone_get('Asia/Makassar');
		$modified_modul	= date("y-m-d h:i:s");
		$account_id		= $this->input->post('account_id');

		$data = array(
				'id_modul'		=> $id_modul,
				'title_modul'	=> $title_modul,
				'link_modul'	=> $link_modul,
				'modified_modul'=> $modified_modul,
				'account_id'	=> $account_id
		);
		
		$where = array(
			'id_modul'  => $id_modul
		);

		$this->Modpa->update_data($where,$data,'ma_modul');
		redirect('admin/Pengaturan');
	}
	public function hapus_modul($id_modul){
		$where = array(
			'id_modul' => $id_modul
		);

		$this->Modpa->hapus_data($where,'ma_modul');
		redirect('admin/Pengaturan');
	}


	//melihat pengaturan menu
	public function Pengaturan_menu(){
		$this->load->view('admin/header');
		$data['ma_menu'] = $this->Modpa->tampil_data('ma_menu');
		$this->load->view('admin/view_pengaturan_menu',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_menu(){
		$this->load->view('admin/header');
		$this->load->view('admin/view_tambah_menu');
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_menu(){
		$id_menu		= $this->input->post('id_menu');
		$title_menu 	= $this->input->post('title_menu');
		$link_menu		= $this->input->post('link_menu');
		date_default_timezone_get('Asia/Makassar');
		$created_menu	= date("y-m-d h:i:s");
		$modified_menu	= date("y-m-d h:i:s");
		$account_id		= $this->input->post('account_id');

		$data = array(
				'id_menu'		=> $id_menu,
				'title_menu'	=> $title_menu,
				'link_menu' 	=> $link_menu,
				'created_menu' => $created_menu,
				'modified_menu'=> $modified_menu,
				'account_id'	=> $account_id
		);
		$res = $this->Modpa->input_data($data,'ma_menu');
		if($res==1){
			redirect('admin/Pengaturan/Pengaturan_menu');
		}
		else{
			echo "gagal";		
		}
	}
	public function edit_menu($id_menu){
		$where = array(
			'id_menu' => $id_menu
		);
		$this->load->view('admin/header');
		$data['ma_menu'] = $this->Modpa->edit_data($where,'ma_menu')->result();
		$this->load->view('admin/view_edit_menu',$data);
		$this->load->view('admin/footer');
	}
	public function update_menu(){
		$id_menu		= $this->input->post('id_menu');
		$title_menu 	= $this->input->post('title_menu');
		$link_menu		= $this->input->post('link_menu');
		date_default_timezone_get('Asia/Makassar');
		$modified_menu	= date("y-m-d h:i:s");
		$account_id		= $this->input->post('account_id');

		$data = array(
				'id_menu'		=> $id_menu,
				'title_menu'	=> $title_menu,
				'link_menu' 	=> $link_menu,
				'modified_menu'=> $modified_menu,
				'account_id'	=> $account_id
		);

		$where = array(
			'id_menu' => $id_menu
		);

		$this->Modpa->update_data($where,$data,'ma_menu');
		redirect('admin/pengaturan/Pengaturan_menu');
	}

	public function hapus_menu($id_menu){
		$where = array(
			'id_menu' => $id_menu
		);

		$this->Modpa->hapus_data($where,'ma_menu');
		redirect('admin/pengaturan/Pengaturan_menu');
	}

	//melihat pengaturan sub menu
	public function Pengaturan_submenu(){
		$this->load->view('admin/header');
		$data['ma_submenu'] = $this->Modpa->tampil_data('ma_submenu');
		$this->load->view('admin/view_pengaturan_submenu',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_submenu(){
		$this->load->view('admin/header');
		$this->load->view('admin/view_tambah_submenu');
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_submenu(){
		$id_submenu			= $this->input->post('id_submenu');
		$title_submenu		= $this->input->post('title_submenu');
		$link_submenu		= $this->input->post('link_submenu');
		date_default_timezone_get('Asia/Makassar');
		$created_submenu	= date("y-m-d h:i:s");
		$modified_submenu	= date("y-m-d h:i:s");
		$account_id			= $this->input->post('account_id');

		$data = array(
				'id_submenu'		=> $id_submenu,
				'title_submenu'		=> $title_submenu,
				'link_submenu'		=> $link_submenu,
				'created_submenu' 	=> $created_submenu,
				'modified_submenu'	=> $modified_submenu,
				'account_id'		=> $account_id
		);
		$res = $this->Modpa->input_data($data,'ma_submenu');
		if($res==1){
			redirect('admin/Pengaturan/Pengaturan_submenu');
		}
		else{
			echo "gagal";		
		}
	}
	public function edit_submenu($id_submenu){
		$where = array(
			'id_submenu' => $id_submenu
		);
		$this->load->view('admin/header');
		$data['ma_submenu'] = $this->Modpa->edit_data($where,'ma_submenu')->result();
		$this->load->view('admin/view_edit_submenu',$data);
		$this->load->view('admin/footer');
	}
	public function update_submenu(){
		$id_submenu			= $this->input->post('id_submenu');
		$title_submenu		= $this->input->post('title_submenu');
		$link_submenu		= $this->input->post('link_submenu');
		date_default_timezone_get('Asia/Makassar');
		$modified_submenu	= date("y-m-d h:i:s");
		$account_id			= $this->input->post('account_id');

		$data = array(
				'id_submenu'		=> $id_submenu,
				'title_submenu'		=> $title_submenu,
				'link_submenu'		=> $link_submenu,
				'modified_submenu'	=> $modified_submenu,
				'account_id'		=> $account_id
		);

		$where = array(
			'id_submenu' => $id_submenu
		);

		$this->Modpa->update_data($where,$data,'ma_submenu');
		redirect('admin/Pengaturan/Pengaturan_submenu');
	}
	public function hapus_submenu($id_submenu){
		$where = array(
			'id_submenu' => $id_submenu
		);

		$this->Modpa->hapus_data($where,'ma_submenu');
		redirect('admin/Pengaturan/Pengaturan_submenu');
	}

	//melihat pengaturan usergroup
	public function Pengaturan_usergroup(){
		$this->load->view('admin/header');
		$data['ma_usergroup'] = $this->Modpa->tampil_data('ma_usergroup');
		$this->load->view('admin/view_pengaturan_usergroup',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_usergroup(){
		$this->load->view('admin/header');
		$this->load->view('admin/view_tambah_usergroup');
		$this->load->view('admin/footer');
	}
	public function aksi_tambah_usergroup(){
		$id_usergroup	= $this->input->post('id_usergroup');
		$usergroup      = $this->input->post('usergroup');
		$label_usergroup= $this->input->post('label_usergroup');

		$data = array(
			'id_usergroup'    => $id_usergroup,
			'usergroup'		  => $usergroup,
			'label_usergroup' => $label_usergroup 
		);

		$res = $this->Modpa->input_data($data,'ma_usergroup');
		if($res == 1){
			redirect('admin/pengaturan/Pengaturan_usergroup');
		}
		else {
			echo "Gagal";
		}
	}
	public function edit_usergroup($id_usergroup){
		$where = array(
			'id_usergroup' => $id_usergroup
		);
		$this->load->view('admin/header');
		$data['ma_usergroup'] = $this->Modpa->edit_data($where,'ma_usergroup')->result();
		$this->load->view('admin/view_edit_usergroup',$data);
		$this->load->view('admin/footer');
	}
	public function update_usergroup(){
		$id_usergroup	= $this->input->post('id_usergroup');
		$usergroup      = $this->input->post('usergroup');
		$label_usergroup= $this->input->post('label_usergroup');

		$data = array(
			'id_usergroup'    => $id_usergroup,
			'usergroup'		  => $usergroup,
			'label_usergroup' => $label_usergroup 
		);
		$where = array(
			'id_usergroup' => $id_usergroup
		);

		$this->Modpa->update_data($where,$data,'ma_usergroup');
		redirect('admin/Pengaturan/Pengaturan_usergroup');
	}
	public function hapus_usergroup($id_usergroup){
		$where = array(
			'id_usergroup' => $id_usergroup
		);

		$this->Modpa->hapus_data($where,'ma_usergroup');
		redirect('admin/Pengaturan/Pengaturan_usergroup');
	}
}
