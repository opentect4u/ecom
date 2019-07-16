<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
    
    public function f_get_products($category, $product){
            
        $sql = "SELECT `c`.`catg_id`, `c`.`catg_desc`, `p`.`prod_id`, `p`.`prod_desc` 
                FROM `md_products` `p`, `md_category` `c` 
                WHERE `p`.`catg_id` = `c`.`catg_id`
                AND `c`.`catg_desc` = '$category'
                AND `p`.`prod_desc` = '$product'";

        return $this->db->query($sql)->result();

    }
    
}