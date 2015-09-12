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
     * This method will return feedback list
     * @author nazmul hasan on 7th september 2015
     */
    public function get_all_feedbacks()
    {
        return $this->db->select("*")
            ->from( $this->tables['feedbacks'])
            ->get();
    }
    /*
     * This method will return feedback info
     * @param $feedback_id, feedback id
     * @author nazmul hasan on 7th september 2015
     */
    public function get_feedback_info($feedback_id)
    {
        $this->db->where('id', $feedback_id);
        return $this->db->select("*")
            ->from( $this->tables['feedbacks'])
            ->get();
    }
    
}
?>
