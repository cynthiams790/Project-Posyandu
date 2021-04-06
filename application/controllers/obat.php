<?php
defined('BASEPATH') or exit('No direct script access allowed');
class obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }


        $this->load->model('m_obat');
    }
    public function data_obat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->m_obat->get_all_obat();
        $this->form_validation->set_rules('nama_obat', 'Nama_obat', 'required|trim');
        $this->form_validation->set_rules('keterangan_obat', 'Keterangan_obat', 'required|trim');
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('data_obat/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_obat' => htmlspecialchars($this->input->post('nama_obat'), true),
                'keterangan_obat' => htmlspecialchars($this->input->post('keterangan_obat'), true)
            ];
            $this->m_obat->insert($data);

            redirect('obat/data_obat');
        }
    }
    public function laporan_pdf()
    {
        $data['data_obat'] = $this->m_obat->get_all_obat();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-obat.pdf";
        $this->pdf->load_view('data_obat/printo', $data);
    }
    public function edit($id)
    {
        $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['data_obat'] = $this->m_obat->edit_data($where, 'data_obat')->result();
        $this->load->view('templates/header', $user);
        $this->load->view('data_obat/o_edit', $data, $user);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_obat');
        $keterangan_obat = $this->input->post('keterangan_obat');

        $obat = array(
            'nama_obat' => $nama,
            'keterangan_obat' => $keterangan_obat
        );

        $where = array(
            'id' => $id
        );

        $this->m_obat->update_data($where, $obat, 'data_obat');
        redirect('obat/data_obat');
    }
    public function hapus($id)
    {
        $this->m_obat->hapus($id);
        $this->data_obat();
    }
}
