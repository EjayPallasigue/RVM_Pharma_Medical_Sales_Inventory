<?php
class Main_model extends CI_Model
{
    public function can_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        return $query->num_rows() > 0;
    }

    public function username_exists($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');

        return $query->num_rows() > 0;
    }

    public function password_exists($password)
    {
        $this->db->where('password', $password);
        $query = $this->db->get('admin');

        return $query->num_rows() > 0;
    }

    public function staff_can_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('staff');

        return $query->num_rows() > 0;
    }

    public function staff_username_exists($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('staff');

        return $query->num_rows() > 0;
    }

    public function staff_password_exists($password)
    {
        $this->db->where('password', $password);
        $query = $this->db->get('staff');

        return $query->num_rows() > 0;
    }
}