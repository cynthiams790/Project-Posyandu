<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_obat extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_all_obat()
    {
        $data = $this->db->query("SELECT * from obat");
        return $data->result();
    }
    public function insert($data)
    {
        return $this->db->insert('obat', $data);
    }
    public function hapus($whare)
    {
        $this->db->where('id', $whare);
        $this->db->delete('obat');
    }
    function edit_data($where)
    {
        return $this->db->get_where('obat', $where);
    }
    function update_data($where, $obat)
    {
        $this->db->where($where);
        $this->db->update('obat', $obat);
    }
}
