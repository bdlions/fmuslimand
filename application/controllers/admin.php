<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('org/admin/feedback_model');
    }
    public function index()
    {
        
    }
    /*
     * This method will display all feedbacks
     * @author nazmul hasan on 7th september 2015
     */
    public function show_feedbacks()
    {
        $feedback_list = array();
        $feedback_list_array = $this->feedback_model->get_all_feedbacks()->result_array();
        if(!empty($feedback_list_array))
        {
            $feedback_list = $feedback_list_array;
        }
        $this->data['feedback_list'] = $feedback_list;
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,'admin/feedbacks', $this->data);
    }
    /*
     * This method will display feedback info
     * @param $feedback_id, feedback id
     * @author nazmul hasan on 7th september 2015
     */
    public function show_feedback($feedback_id = 0)
    {
        if(!isset($feedback_id) || $feedback_id == 0)
        {
            redirect('admin/show_feedbacks','refresh');
        }
        $feedback_info = array();
        $feedback_info_array = $this->feedback_model->get_feedback_info($feedback_id)->result_array();
        if(!empty($feedback_info_array))
        {
            $feedback_info = $feedback_info_array[0];
        }
        if(empty($feedback_info))
        {
            redirect('admin/show_feedbacks','refresh');
        }
        $this->data['feedback_info'] = $feedback_info;
        $this->template->load(ADMIN_LOGIN_SUCCESS_TEMPLATE,'admin/show_feedback', $this->data);
    }
}