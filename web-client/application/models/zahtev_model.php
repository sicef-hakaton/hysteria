<?php

class Zahtev_model extends CI_Model {

    var $id = '';
    var $tip = '';
    var $svrha = '';
    var $status_f = 'neodobreno';
    var $datum_zahtevanja = '';
    var $datum_izdavanja = '';
    var $komentar = '';

    function  __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_request($data)
    {
        $this->db->insert('zahtev',$data);
    }

    public function get_requests($username)
    {
        $query = $this->db
            ->select('*')
            ->from('zahtev')
            ->where('korisnicko_ime_fk',$username)
            ->get();

        return $query->result_array();

    }

    public function get_all_requests()
    {
        $query = $this->db->get('zahtev');

        return $query->result_array();
    }

    public function get_request($username,$id)
    {
        $query = $this->db
            ->select('id,tip, datum_zahtevanja, datum_izdavanja, status_f, komentar')
            ->from('zahtev')
            ->where('korisnicko_ime_fk',$username)
            ->where('id',$id)
            ->get();
        return $query->row_array();
    }

    public function delete_request($username, $id)
    {
        $this->db
            ->where('korisnicko_ime_fk',$username)
            ->where('id', $id)
            ->delete('zahtev');

        $query = $this->db
            ->get_where('zahtev', array('korisnicko_ime_fk' => $username));

        $query->result_array();
    }

    public function update_status($id,$data)
    {
        $this->db
            ->where('id',$id)
            ->update('zahtev',$data);
    }
}