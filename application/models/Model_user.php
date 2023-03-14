<?php


class Model_user extends CI_Model
{
    // google from-to database
    public function tambah($data)
    {
        $this->db->insert('user', $data);
    }

    public function get_user($where)
    {
        return $this->db->get_where('user',$where)->row_object();
    }
    public function cek_data($where)
    {
        return $this->db->get_where('user',$where)->num_rows();
    }

    //sampai sini google bre...
}
