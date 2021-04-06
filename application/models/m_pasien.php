<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_pasien extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_all_pasien()
    {
        $data = $this->db->query("SELECT * from pasien");
        return $data->result();
    }
    public function insert($data)
    {
        return $this->db->insert('pasien', $data);
    }
    public function hapus($whare)
    {
        $this->db->where('id', $whare);
        $this->db->delete('pasien');
    }
    function edit_data($where)
    {
        return $this->db->get_where('pasien', $where);
    }
    function update_data($where, $data)
    {
        $this->db->where($where);
        $this->db->update('pasien', $data);
    }
}
