<?php
class Altdata_m extends CI_Model{

    public function get()
    {
        $query = $this->db->get('datas_alteradas');
       // if($query->num_rows > 0) return $query->result_array();
        return $query;
    }
   
    public function inserir() {
        return $this->db->insert('datas_alteradas', $this);
    }
    
}
