<?php

class M_rektor extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('rektor');
    }

    public function detail_rektor($nip = null)
    {
        $query = $this->db->get_where('rektor', array('nip' => $nip))->row();
        return $query;
    }

    public function delete_rektor($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_rektor($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
