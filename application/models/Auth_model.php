<?php
class Auth_model  extends CI_Model
{
    public function log_pengguna($id)
    {
        $data = array(
            'id_pengguna' => $id

        );
        $query = $this->db->insert('log_pengguna', $data);
        return;
    }
}
