<?php

class Korisnik_model extends CI_Model {

	var $korisnicko_ime = '';
	var $lozinka = '';
    var $tip = '';
	
	function __construct()
	{
        parent::__construct();
		$this->load->database();
	}

    public function insert_new_user($data)
    {
        $this->db->insert('korisnik',$data);
    }


	public function get_user_type($username, $password)
	{
		$query = $this->db
            ->select('tip, korisnicko_ime')
            ->from('korisnik')
            ->where('korisnicko_ime', $username)
            ->where('lozinka',$password)
            ->get();
		return $query->row_array();
	}

    public function delete_user($username)
    {
        $this->db->delete('korsinik',$username);
    }

    public function update_user($username, $data)
    {
        $this->db
            ->where('korisnicko_ime',$username)
            ->update('korisnik', $data);
    }

    public function get_users()
    {
        $query = $this->db
            ->get_where('korisnik',array('tip' => 'posetilac'));

        return $query->result_array();
    }



}