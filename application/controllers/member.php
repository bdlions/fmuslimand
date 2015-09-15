<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {	
    function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('org/member/feedback_model');
    }
    public function index()
    {
        $this->data['r_first_name'] = array(
            'name' => 'r_first_name',
            'id' => 'r_first_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('r_first_name'),
        );
        $this->data['r_last_name'] = array(
            'name' => 'r_last_name',
            'id' => 'r_last_name',
            'type' => 'text',
            'value' => $this->form_validation->set_value('r_last_name'),
        );
        $this->data['r_email'] = array(
            'name' => 'r_email',
            'id' => 'r_email',
            'type' => 'text',
            'value' => $this->form_validation->set_value('r_email'),
        );

        $this->data['r_password'] = array(
            'name' => 'r_password',
            'id' => 'r_password',
            'type' => 'password',
            'value' => $this->form_validation->set_value('r_password'),
        );
        $this->data['r_password_conf'] = array(
            'name' => 'r_password_conf',
            'id' => 'r_password_conf',
            'type' => 'password',
            'value' => $this->form_validation->set_value('r_password_conf'),
        );
        $this->data['register_btn'] = array('name' => 'register_btn',
            'id' => 'register_btn',
            'type' => 'submit',
            'value' => 'Sign Up',
        );

        //the user is not logging in so display the login page
        //set the flash data error message if there is one
        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        $this->data['identity'] = array('name' => 'identity',
            'id' => 'identity',
            'type' => 'text',
            'value' => $this->form_validation->set_value('identity'),
        );
        $this->data['password'] = array('name' => 'password',
            'id' => 'password',
            'type' => 'password',
        );
        $this->data['login_btn'] = array('name' => 'login_btn',
            'id' => 'login_btn',
            'type' => 'submit',
            'tabindex' => '4',
            'value' => 'Sign in',
        );
        $this->data['country_list'] = array();
        $this->data['gender_list'] = array();
        $this->data['religion_list'] = array();
        $this->data['month_list'] = array();
        $this->data["date_list"] = array();
        $this->data["year_list"] = array();
        $this->template->load(MEMBER_LOGIN_TEMPLATE,'member/login', $this->data);
    }
    
    public function add_feedback()
    {
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('name', 'Name', 'xss_clean|required');
        $this->form_validation->set_rules('current_address', 'Current Address', 'xss_clean|required');
        $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'xss_clean|required');
        $this->form_validation->set_rules('email', 'Email', 'xss_clean|required');
        $this->form_validation->set_rules('cell', 'Cell', 'xss_clean|required');
        $this->form_validation->set_rules('academic_qualification', 'Academic Qualification', 'xss_clean|required');
        $this->form_validation->set_rules('personal_skills', 'Personal Skills', 'xss_clean|required');
        $this->form_validation->set_rules('reference', 'Reference', 'xss_clean|required');
        if($this->input->post())
        {
            if($this->form_validation->run() == true)
            {
                $feedback_data = array(
                    'name' => $this->input->post('name'),
                    'current_address' => $this->input->post('current_address'),
                    'permanent_address' => $this->input->post('permanent_address'),
                    'national_id' => $this->input->post('national_id'),
                    'passport_id' => $this->input->post('passport_id'),
                    'email' => $this->input->post('email'),
                    'skype' => $this->input->post('skype'),
                    'cell' => $this->input->post('cell'),
                    'blood_group' => $this->input->post('blood_group'),
                    'religion' => $this->input->post('religion'),
                    'personal_statement' => $this->input->post('personal_statement'),
                    'academic_qualification' => $this->input->post('academic_qualification'),
                    'volunteering_skills' => $this->input->post('volunteering_skills'),
                    'knowledge_of_speciality' => $this->input->post('knowledge_of_specialty'),
                    'personal_skills' => $this->input->post('personal_skills'),
                    'hobbies_and_interests' => $this->input->post('hobbies_and_interest'),
                    'total_friends' => $this->input->post('no_of_friends_on_facebook'),
                    'reference' => $this->input->post('reference'),                
                );
                $feedback_id = $this->feedback_model->add_feedback($feedback_data);
                if($feedback_id !== FALSE){
                    $this->data['message'] = "Thank you for your inofrmation.";
                }else{
                    $this->data['message'] = "System error. Please try again.";
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }
        }
        $this->data['name'] = array(
            'id' => 'name',
            'name' => 'name',
            'type' => 'text',
        );

        $this->data['current_address'] = array(
            'id' => 'current_address',
            'name' => 'current_address',
            'type' => 'text',
        );
        $this->data['permanent_address'] = array(
            'id' => 'permanent_address',
            'name' => 'permanent_address',
            'type' => 'text',
        );

        $this->data['national_id'] = array(
            'id' => 'national_id',
            'name' => 'national_id',
            'type' => 'text',
        );
        $this->data['passport_id'] = array(
            'id' => 'passport_id',
            'name' => 'passport_id',
            'type' => 'text',
        );

        $this->data['email'] = array(
            'id' => 'email',
            'name' => 'email',
            'type' => 'text',
        );
        $this->data['skype'] = array(
            'id' => 'skype',
            'name' => 'skype',
            'type' => 'text',
        );
        $this->data['cell'] = array(
            'id' => 'cell',
            'name' => 'cell',
            'type' => 'text',
        );
        $this->data['blood_group'] = array(
            'id' => 'blood_group',
            'name' => 'blood_group',
            'type' => 'text',
        );
        $this->data['religion'] = array(
            'id' => 'religion',
            'name' => 'religion',
            'type' => 'text',
        );
        
        $this->data['personal_statement'] = array(
            'id' => 'personal_statement',
            'name' => 'personal_statement',
            'rows' => '1',
        );

        $this->data['academic_qualification'] = array(
            'id' => 'academic_qualification',
            'name' => 'academic_qualification',
            'rows' => '1',
        );

        $this->data['volunteering_skills'] = array(
            'id' => 'volunteering_skills',
            'name' => 'volunteering_skills',
            'rows' => '1',
        );


        $this->data['knowledge_of_specialty'] = array(
            'id' => 'knowledge_of_specialty',
            'name' => 'knowledge_of_specialty',
            'type' => 'text',
        );
        $this->data['personal_skills'] = array(
            'id' => 'personal_skills',
            'name' => 'personal_skills',
            'rows' => '1',
        );
        $this->data['hobbies_and_interest'] = array(
            'id' => 'hobbies_and_interest',
            'name' => 'hobbies_and_interest',
            'rows' => '1',
        );
        $this->data['no_of_friends_on_facebook'] = array(
            'id' => 'no_of_friends_on_facebook',
            'name' => 'no_of_friends_on_facebook',
            'type' => 'text',
        );
        $this->data['reference'] = array(
            'id' => 'reference',
            'name' => 'reference',
            'rows' => '1',
        );
        $this->data['submit'] = array(
            'id' => 'submit',
            'name' => 'submit',
            'type' => 'submit',
            'value' => 'submit',
        );
        $this->template->load(MEMBER_LOGIN_SUCCESS_TEMPLATE,'member/add_feedback', $this->data);
    }
}