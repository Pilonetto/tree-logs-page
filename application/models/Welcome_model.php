<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {
    public function get_all_logs(){        
        $this->db->select('dtlog,device, message');
        return  $this->db->get('tbl_logs')->result_array();        
    }
}