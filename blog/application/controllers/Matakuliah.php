<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
        
    }
    public function detail($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $siswa = $this->matakuliah_model->getById($id);
        $data['siswa'] = $siswa;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // rendr view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');          // 1
        $_nama = $this->input->post('nama_matkul');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');
        $_dosen_id = $this->input->post('dosen_id');

        $data_matakuliah['nama_matkul'] = $_nama;          // 2
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;
        $data_matakuliah['dosen_id']=$_dosen_id;

        if((!empty($_idedit))){         // update
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{
            // data baru
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah', 'refresh');
    }
    public function edit($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah'] = $obj_matakuliah;
        //render data dan kirim data kedalam view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layouts/footer'); 
    }
    public function delete($id){
        // akses midel matakuliah
        $this->load->model('matakuliah_model', 'matakuliah');
        // mengecek data matakuliah berdasarkan id
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah', 'refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('/login');
        }
    }
} 
?> 