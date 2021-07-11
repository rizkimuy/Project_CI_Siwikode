<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('Wisata_model');//load model
		$data['Wisata'] = $this->Wisata_model->getAll(); //query select all data
		$this->load->view('Wisata/index',$data);
	}

	public function view($id){
		
		$this->load->model('Wisata_model');
		$data['Wisata'] = $this->Wisata_model->findById($id);
		$this->load->view('Wisata/view',$data);
	}

    public function delete($id){
        
		//untuk menghapus data
        $this->load->model('Wisata_model');//load model
		$where = array('id' => $id);
		$this->Wisata_model->delete($where,'Wisata');// query delete(delete from Wisata where id = $id)
		redirect('Wisata/index');
	}

	

	//add data
	public function add(){
		$this->load->library('form_validation');
		$this->load->view('Wisata/tambah_Wisata');
	}

	public function save(){
	
		$this->load->model('Wisata_model');

		$str = rand();
		$result = md5($str);
		
		$data['id'] =$this->input->post('nama');
		$data['nama'] =$this->input->post('nama');
		$data['deskripsi'] =$this->input->post('deskripsi');
		$data['jenis_wisata_id'] =$this->input->post('jenis_wisata_id');
		$data['fasilitas'] =$this->input->post('fasilitas');
		$data['bintang'] =$this->input->post('bintang');
		$data['kontak'] =$this->input->post('kontak');
		$data['alamat'] =$this->input->post('alamat');
		$data['latlong'] =$this->input->post('latlong');
		$data['email'] =$this->input->post('email');
		$data['web'] =$this->input->post('web');
		$data['jenis_kuliner_id'] =$this->input->post('jenis_kuliner_id');





		
		//ambil fungsi upload foto dari model
		$this->Wisata_model->save($data);
		redirect('Wisata/index');
	}

	//edit data

	public function edit($id){
		$this->load->model('Wisata_model');
		$data['Wisata'] = $this->Wisata_model->findById($id);
		$this->load->view('Wisata/edit',$data);
	}

	public function update(){
	
		
		$this->load->model('Wisata_model');
		$id = $this->input->post('id');
		$str = rand();
		$result = md5($str);
		
		$data['nama'] =$this->input->post('nama');
		$data['deskripsi'] =$this->input->post('deskripsi');
		$data['jenis_wisata_id'] =$this->input->post('jenis_wisata_id');
		$data['fasilitas'] =$this->input->post('fasilitas');
		$data['bintang'] =$this->input->post('bintang');
		$data['kontak'] =$this->input->post('kontak');
		$data['alamat'] =$this->input->post('alamat');
		$data['latlong'] =$this->input->post('latlong');
		$data['email'] =$this->input->post('email');
		$data['web'] =$this->input->post('web');
		$data['jenis_kuliner_id'] =$this->input->post('jenis_kuliner_id');
		
		
		//upload file
		
		$this->Wisata_model->update($data,$id);
		redirect('Wisata/index');
	}


	

}
