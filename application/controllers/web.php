<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 
class Web extends CI_Controller{ 
    function __construct(){ 
        parent::__construct(); 
        $this->load->helper('url'); 
    } 

    public function index(){ 
        $data['judul'] = "Halaman Depan"; 
        $this->load->view('v_header',$data); 
        $this->load->view('v_index',$data); 
        $this->load->view('v_footer',$data); 
    } 
    public function daftar()
    {
        $data['judul'] = "Halaman daftar";
        $this->load->view('v_header', $data);
        $this->load->view('v_input', $data);
        $this->load->view('v_footer', $data);
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa',
            'required|min_length[10]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        $this->form_validation->set_rules('nis', 'NIS',
            'required|min_length[8]', [
            'required' => 'NIS Harus diisi',
            'min_length' => 'NIS terlalu pendek'
        ]);
        $this->form_validation->set_rules('nis', 'Tempat Tanggal Lahir',
            'required|min_length[8]', [
            'required' => 'Tempat Tanggal Lahir Harus diisi',
            'min_length' => 'Tempat Tanggal Lahir terlalu pendek'
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('v_header');
            $this->load->view('v_input');
            $this->load->view('v_footer');
        } else {
            $data = [
                'nama'      => $this->input->post('nama'),
                'nis'       => $this->input->post('nis'),
                'kelas'     => $this->input->post('kelas'),
                'tglh'      => $this->input->post('tglh'),
                'tmplh'     => $this->input->post('tmplh'),
                'alamat'    => $this->input->post('alamat'),
                'gender'    => $this->input->post('gender'),
                'agama'     => $this->input->post('agama')
            ];
            $this->load->view('v_header',$data);
            $this->load->view('v_output', $data);
            $this->load->view('v_footer',$data);
        }
    }
}
?>