<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-input');
    }

    public function cetak()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('form-output', $data);
    }
}