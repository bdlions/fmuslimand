<div class="container form-group">
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div> 
    <div class="row form-group"></div>
    <div class="row">
        <div class=" col-md-offset-2 col-md-8" style="background-color:#52B5CE; padding-bottom: 16px; height: 400px; overflow-y: scroll; overflow-x: hidden;">
            <div class="row">
                <div class="row form-group">
                    <div class="col-md-12">
                        <h2 class="vlunteer_form_title">Volunteer List</h2>  
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-12">
                        <table class="table table-bordered">
                            <tr class="table_row_style">
                                <td>Serial:</td>
                                <td>Name:</td>
                                <td>E-mail:</td>		
                                <td>Cell:</td>
                                <td>Religion:</td>
                                <td>Academic Qualification:</td>
                                <td>Volunteering Skills:</td>
                                <td>Reference:</td>
                                <td>Details:</td>
                            </tr>
                            <?php 
                            $counter = 1;
                            foreach ($feedback_list as $feedback) { ?>
                                <tr class="volunteer_row_style">
                                    <td><?php echo $counter; ?> </td>
                                    <td><?php echo $feedback['name']; ?> </td>
                                    <td><?php echo $feedback['email']; ?></td>
                                    <td><?php echo $feedback['cell']; ?></td>
                                    <td><?php echo $feedback['religion']; ?></td>
                                    <td><?php echo $feedback['academic_qualification']; ?></td>
                                    <td><?php echo $feedback['volunteering_skills']; ?></td>
                                    <td><?php echo $feedback['reference']; ?></td>
                                    <td><a class="volunteer_view_style"href="<?php echo base_url() . 'admin/show_feedback/' . $feedback['id'] ?>">View</a></td>
                                </tr>
                            <?php 
                            $counter++;
                            } ?>
                        </table>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>