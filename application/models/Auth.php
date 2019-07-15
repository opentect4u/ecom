<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {
    
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

    //For inserting row

    public function f_insert($table_name, $data_array) {

        $this->db->insert($table_name, $data_array);

        return;

    }

    //For Inserting Multiple Row

    public function f_insert_multiple($table_name, $data_array){

        $this->db->insert_batch($table_name, $data_array);

        return;

    }

    //For Editing row

    public function f_edit($table_name, $data_array, $where) {

        $this->db->where($where);
        $this->db->update($table_name, $data_array);

        return;

    }

    //For Deliting row

    public function f_delete($table_name, $where) {

        $this->db->delete($table_name, $where);

        return;

    }

    public function f_get_products(){
        
        $sql = "SELECT `c`.`catg_id`, `c`.`catg_desc`, MAX(p.prod_id) prod_id, `p`.`prod_desc` 
                FROM `md_products` `p`, `md_category` `c` 
                WHERE `p`.`catg_id` = `c`.`catg_id`
                GROUP BY `c`.`catg_id`, `c`.`catg_desc`, `p`.`prod_desc`";

        return $this->db->query($sql)->result();

    }
}