<?php

class Brands_model extends CI_Model {

    protected $table = 'brands';

    public function insert($data){


        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function select_all(){
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function select_all_active(){
        $this->db->where('status', 1);
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function selectDataById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);

        return $query->row();
    }

    public function selectActiveDataById($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $query = $this->db->get($this->table);

        return $query->row();
    }

    public function update($id,$data){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

     public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);

        return $this->db->affected_rows();
    }

}