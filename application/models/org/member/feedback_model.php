<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Name:  Feedback Model
 * Author:  Nazmul on 7th September 2015
 * Requirements: PHP5 or above
 *
 */
class Feedback_model extends Ion_auth_model {

    public function __construct() {
        parent::__construct();
    }
    
    /*
     * This method will add feedback of a user
     * @param $feedback_data, feedback data to be added
     * @author nazmul hasan on 7th september 2015
     */
    public function add_feedback($feedback_data)
    {
        $data = $this->_filter_data($this->tables['feedbacks'], $feedback_data);        
        $this->db->insert($this->tables['feedbacks'],$data);        
        $id = $this->db->insert_id(); 
        return isset($id)?$id:FALSE;
    }
    
}
?>
