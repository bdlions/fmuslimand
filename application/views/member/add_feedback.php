<div class="reg_form_bg">
    <div class="container form-group">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="reg_form_content_bg">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-11">
                            <div class="row">
                                <div class="col-md-offset-4 col-md-8">
                                    <span class="big_header_text">MUSLIMAND.COM</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-4 col-md-8">
                                    <span class="small_header_text">(Contribution Your Talent for Social Networking)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group"></div>
                    <div class="row form-group"></div>
                    <?php echo form_open("member", array('id' => 'form_create_user', 'class' => 'form-horizontal')); ?>
                    <?php if (isset($message) && ($message != NULL)) { ?>
                        <div class="alert alert-dismissible success_msg"><?php echo $message; ?></div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="vertical-text1">Volunteer</div> <div class="vertical-text2">Form</div>
                        </div>
                        <div class="col-md-11">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Name:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($name + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Current Address:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($current_address + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Permanent Address:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($permanent_address + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div> 
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Blood Group:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control reg_form_control_custom">
                                    <?php //echo form_input($permanent_address + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div> 
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">National ID:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($national_id + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Passport ID:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($passport_id + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>    


                            <div class="row">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">E-Mail:<span class="reg_required_style">*</span></label>
                                </div> 
                                <div class="col-md-8">
                                    <?php echo form_input($email + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Skype:</label>
                                </div> 
                                <div class="col-md-8">
                                    <?php echo form_input($skype + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group"></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Cell:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($cell + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                                <div class="row form-group"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Religion:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($religion + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Personal Statement:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($personal_statement + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div>   
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Academic Qualification:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($academic_qualification + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style"> Volunteering Skills:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($volunteering_skills + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Knowledge of Specialty:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_input($knowledge_of_specialty + array('class' => 'form-control reg_form_control_custom')); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Personal Skills:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($personal_skills + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Hobbies and Interest:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($hobbies_and_interest + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">List of Friends on Facebook/other Social Site:</label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($list_of_friends_on_facebook + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="reg_form_label_style">Reference:<span class="reg_required_style">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <?php echo form_textarea($reference + array('class' => 'form-control reg_form_control_custom textarea_custom')); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-9 col-md-3">
                                    <?php echo form_input($submit + array('class' => 'btn btn-warning btn-sm pull-right')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>