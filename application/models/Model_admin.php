<?php
defined('BASEPATH') or exit('No direct script access allowed');
//khusus menu
class Model_admin extends CI_Model
{
    public function sw($menu_id, $role_id)
    {
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
    }
}
