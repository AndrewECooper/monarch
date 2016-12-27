<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                My Account
            </div>
            <div class="panel-body">
                <?php echo form_open('', array('class'=>'form-user-edit')); ?>
                
                <div class="col-md-8">
                    <?php if ($add_new): ?>
                    <div class="form-group">
                        <label for="first_name">Username:</label>
                        <?php echo form_input(array('name' => 'username', 
                            'id' => 'username', 
                            'class' => 'form-control input-sm', 
                            'placeholder' => "Username",
                            "value" => $employee["username"],
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <?php echo form_input(array('name' => 'first_name', 
                            'id' => 'first_name', 
                            'class' => 'form-control input-sm', 
                            'placeholder' => "First Name",
                            "value" => $employee["first_name"],
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <?php echo form_input(array('name' => 'last_name', 
                            'id' => 'last_name', 
                            'class' => 'form-control input-sm', 
                            'placeholder' => "Last Name", 
                            "value" => $employee["last_name"],
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email:</label>
                        <?php echo form_input(array('name' => 'email', 
                            'id' => 'email',
                            "type" => "email",
                            'class' => 'form-control input-sm', 
                            'placeholder' => "Email", 
                            "value" => $employee["email"],
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <?php echo form_input(array('name' => 'password', 
                            'id' => 'password',
                            "type" => "password",
                            'class' => 'form-control input-sm', 
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Confirm Password:</label>
                        <?php echo form_input(array('name' => 'password_confirm', 
                            'id' => 'password_confirm',
                            "type" => "password",
                            'class' => 'form-control input-sm', 
                            is_enabled("edit_self", $user["permissions"]) => "",
                            'maxlength' => 256)); ?>
                    </div>

                    <?php echo form_submit(array('name'=>'submit', 
                                 'class'=>'btn btn-primary btn-block',
                                 is_enabled("edit_self", $user["permissions"]) => "",), 
                                 "Submit Changes"); ?>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="first_name">Sales:</label>
                        <?php echo form_checkbox(array('name' => 'perms_sales', 
                            'id' => 'perms_sales', 
                            'class' => 'checkbox', 
                            "value" => "sales",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("sales", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Add Users:</label>
                        <?php echo form_checkbox(array('name' => 'perms_add_users', 
                            'id' => 'perms_add_users', 
                            'class' => 'checkbox', 
                            "value" => "add_users",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("add_users", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Add Jobs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_add_jobs', 
                            'id' => 'perms_add_jobs', 
                            'class' => 'checkbox', 
                            "value" => "add_jobs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("add_jobs", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Add Leads:</label>
                        <?php echo form_checkbox(array('name' => 'perms_add_leads', 
                            'id' => 'perms_add_leads', 
                            'class' => 'checkbox', 
                            "value" => "add_leads",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("add_leads", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">View Logs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_view_logs', 
                            'id' => 'perms_view_logs', 
                            'class' => 'checkbox', 
                            "value" => "view_logs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("view_logs", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Start/End Jobs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_start_end_jobs', 
                            'id' => 'perms_start_end_jobs', 
                            'class' => 'checkbox', 
                            "value" => "start_end_jobs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("start_end_jobs", $employee["permissions"]))); ?>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="first_name">Collector:</label>
                        <?php echo form_checkbox(array('name' => 'perms_collector', 
                            'id' => 'perms_collector', 
                            'class' => 'checkbox', 
                            "value" => "collector",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("collector", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Edit Users:</label>
                        <?php echo form_checkbox(array('name' => 'perms_edit_users', 
                            'id' => 'perms_edit_users', 
                            'class' => 'checkbox', 
                            "value" => "edit_users",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("edit_users", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Edit Jobs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_edit_jobs', 
                            'id' => 'perms_edit_jobs', 
                            'class' => 'checkbox', 
                            "value" => "edit_jobs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("edit_jobs", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Edit Leads:</label>
                        <?php echo form_checkbox(array('name' => 'perms_edit_leads', 
                            'id' => 'perms_edit_leads', 
                            'class' => 'checkbox', 
                            "value" => "edit_leads",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("edit_leads", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">Clone Jobs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_clone_jobs', 
                            'id' => 'perms_clone_jobs', 
                            'class' => 'checkbox', 
                            "value" => "clone_jobs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("clone_jobs", $employee["permissions"]))); ?>
                    </div>
                    <div class="form-group">
                        <label for="first_name">View All Jobs:</label>
                        <?php echo form_checkbox(array('name' => 'perms_view_all_jobs', 
                            'id' => 'perms_view_all_jobs', 
                            'class' => 'checkbox', 
                            "value" => "view_all_jobs",
                            is_enabled("edit_users", $user["permissions"]) => "",
                            "checked" => in_array("view_all_jobs", $employee["permissions"]))); ?>
                    </div>
                </div>
                
                <?php echo form_close(); ?>
                
                <!-- <div class="col-md-12">
                    Data: <?php echo $bob; ?>
                </div> -->
            </div>
        </div>
    </div>
</div>
