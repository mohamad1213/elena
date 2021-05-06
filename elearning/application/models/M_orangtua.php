<?php

class M_orangtua extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('orangtua');
    }

    public function detail_orangtua($nip = null)
    {
        $query = $this->db->get_where('orangtua', array('nip' => $nip))->row();
        return $query;
    }

    public function delete_orangtua($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_orangtua($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
