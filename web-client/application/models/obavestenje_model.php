<?php

class Obavestenje_model extends CI_Model {

    var $id = '';
    var $sadrzaj = '';
    var $datum = '';
    var $tip = '';
    var $link = '';

    function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function get_informations()
    {
        $query = $this->db
            ->select('id, naslov, datum')
            ->from('obavestenje')
            ->get();

        return $query->result_array();
    }

    public function get_information($id)
    {
        $query = $this->db
            ->get_where('obavestenje',array('id' => $id));
        return $query->row_array();
    }

    public function insert_information($data)
    {
        $this->db->insert('obavestenje',$data);
    }

    public function delete_information($id)
    {
        $this->db->where('id',$id)->delete('obavestenje');
    }

}