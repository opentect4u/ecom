<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {
    
    public function f_get_particulars($table_name, $select=NULL, $where=NULL, $flag) {
        
        if(isset($select)) {

            $this->db->select($select);

        }

        if(isset($where)) {

            $this->db->where($where);

        }

        $result		=	$this->db->get($table_name);

        if($flag == 1) {

            return $result->row();
            
        }else {

            return $result->result();

        }

    }
}