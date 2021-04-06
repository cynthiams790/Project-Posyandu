<?php
defined('BASEPATH') or exit('No direct script access allowed');
class pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
        // require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    }
    public function data_pasien()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_pasien'] = $this->m_pasien->get_all_pasien();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('jk', 'Jk', 'required|trim');
        $this->form_validation->set_rules('lahir', 'Lahir', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Nama_ayah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_pasien/index', $data);
            $this->load->view('templates/footer');
        } else {
            $pasien = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'umur' => htmlspecialchars($this->input->post('umur'), true),
                'jk' => htmlspecialchars($this->input->post('jk'), true),
                'lahir' => htmlspecialchars($this->input->post('lahir'), true),
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah'), true),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu'), true),
                'alamat' => htmlspecialchars($this->input->post('alamat'), true)
            ];

            $this->m_pasien->insert($pasien);
            $this->session->flashdata('pasien');
            redirect('pasien/data_pasien');
        }
    }
    public function laporan_pdf()
    {
        $data['data_pasien'] = $this->m_pasien->get_all_pasien();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-pasien.pdf";
        $this->pdf->load_view('data_pasien/printp', $data);
    }
    public function edit($id)
    {
        $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['data_pasien'] = $this->m_pasien->edit_data($where, 'data_pasien')->result();
        $this->load->view('templates/header', $user);
        $this->load->view('data_pasien/p_edit', $data, $user);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $umur = $this->input->post('umur');
        $jk = $this->input->post('jk');
        $lahir = $this->input->post('lahir');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'umur' => $umur,
            'jk' => $jk,
            'lahir' => $lahir,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'alamat' => $alamat

        );

        $where = array(
            'id' => $id
        );

        $this->m_pasien->update_data($where, $data, 'data_pasien');
        redirect('pasien/data_pasien');
    }
    public function hapus($id)
    {
        $this->m_pasien->hapus($id);
        $this->data_pasien();
    }
}
