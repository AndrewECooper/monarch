<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title pull-left">
                    <?php echo $lead["company_name"]; ?>
                </h2>
                
                <button type="button" data-toggle="modal" data-target="#job-stage" class="btn btn-info pull-right btn-xs">
                    <?php echo $lead["stage"]; ?>
                </button>
                <button data-toggle="modal" data-target="#job-status" 
                        class="btn btn-info pull-right btn-xs" style="margin-right: 5px">
                    <?php echo $lead["status"]; ?>
                </button>
                
                <div class="pull-right" style="margin-right: 20px">
                    <?php echo $lead["salesman"]; ?> / <?php echo $lead["collector"]; ?>
                </div>
                
                <div class="pull-right" style="margin-right: 20px">
                    <?php echo $lead["line_of_business"]; ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Contact Info -->
                                    <div class="col-md-6 panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="contact_first_name">First Name:</label>
                                                <input type="text" class="form-control input-sm" id="contact_first_name"
                                                       value="<?php echo $lead["contact_first_name"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_last_name">Last Name:</label>
                                                <input type="text" class="form-control input-sm" id="contact_last_name"
                                                       value="<?php echo $lead["contact_last_name"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_email">Email:</label>
                                                <input type="email" class="form-control" id="contact_email"
                                                       value="<?php echo $lead["contact_email"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="primary_phone">Primary Phone:</label>
                                                <input type="text" class="form-control" id="primary_phone"
                                                       value="<?php echo $lead["primary_phone"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="alternate_phone">Alternate Phone:</label>
                                                <input type="text" class="form-control" id="alternate_phone"
                                                       value="<?php echo $lead["alternate_phone"]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Addresses -->
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#address-physical" data-toggle="tab">Physical Address</a></li>
                                                    <li><a href="#address-mailing" data-toggle="tab">Mailing Address</a></li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content">
                                                    <div class="tab-pane fade active in" id="address-physical">
                                                        <div class="form-group">
                                                            <label for="physical_address">Address:</label>
                                                            <input type="text" class="form-control input-sm" id="physical_address"
                                                                   value="<?php echo $lead["physical_address"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_city">City:</label>
                                                            <input type="text" class="form-control input-sm" id="physical_address_city"
                                                                   value="<?php echo $lead["physical_address_city"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_state">State:</label>
                                                            <input type="text" class="form-control" id="physical_address_state"
                                                                   value="<?php echo $lead["physical_address_state"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_zip">Zip Code:</label>
                                                            <input type="text" class="form-control" id="physical_address_zip"
                                                                   value="<?php echo $lead["physical_address_zip"]; ?>">
                                                        </div>
                                                        <div class="alert alert-warning">
                                                            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="address-mailing">
                                                        <div class="form-group">
                                                            <label for="mailing_address">Address:</label>
                                                            <input type="text" class="form-control input-sm" id="mailing_address"
                                                                   value="<?php echo $lead["mailing_address"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_city">City:</label>
                                                            <input type="text" class="form-control input-sm" id="mailing_address_city"
                                                                   value="<?php echo $lead["mailing_address_city"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_state">State:</label>
                                                            <input type="text" class="form-control" id="mailing_address_state"
                                                                   value="<?php echo $lead["mailing_address_state"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_zip">Zip Code:</label>
                                                            <input type="text" class="form-control" id="mailing_address_zip"
                                                                   value="<?php echo $lead["mailing_address_zip"]; ?>">
                                                        </div>
                                                        <div class="alert alert-warning">
                                                            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?php echo form_submit(array('name'=>'submit', 
                                                'class'=>'btn btn-primary btn-block',
                                                is_enabled("edit_jobs", $user["permissions"]) => "",), 
                                                "Submit Changes"); ?>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">     
                                    <!-- Artwork -->
                                    <div class="col-md-12 panel panel-default">
                                        <div class="panel-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 class="pull-left">Artwork</h4>
                                                        <button class="btn btn-primary btn-xs pull-right">Upload Artwork</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                2016
                                                            </div>
                                                            <div class="panel-body">
                                                                <img height="100" width="100" src="<?php echo base_url('/img/job_1.jpg'); ?>" 
                                                                     alt="2016" class="img-thumbnail center-block">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                2015
                                                            </div>
                                                            <div class="panel-body">
                                                                <img height="100" width="100" src="<?php echo base_url('/img/job_2.jpg'); ?>" 
                                                                     alt="2015" class="img-thumbnail center-block">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                2014
                                                            </div>
                                                            <div class="panel-body">
                                                                <img height="100" width="100" src="<?php echo base_url('/img/job_3.jpg'); ?>" 
                                                                     alt="2014" class="img-thumbnail center-block">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                2013
                                                            </div>
                                                            <div class="panel-body">
                                                                <img height="100" width="100" src="<?php echo base_url('/img/job_4.png'); ?>" 
                                                                     alt="2013" class="img-thumbnail center-block">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Notes -->
                        <div class="col-md-4 panel panel-default">
                            <div class="panel-body">
                                <h4 class="pull-left">Notes</h4>
                                <button class="pull-right btn btn-primary btn-xs">Add</button>
                                <div class="form-group">

                                    <div>
                                      <textarea class="form-control" rows="3" id="job_new_note"></textarea>
                                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                    </div>
                                </div>

                                <table class="table table-condensed">
                                    <?php foreach ($lead["notes"] as $note): ?>
                                    <tr>
                                        <th class="info">
                                            <?php echo $note["created"]; ?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $note["message"]; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="job-status" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div>
                    <h4>
                        Status
                    </h4>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option1" value="option1" checked>
                            New Lead
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option2" value="option2">
                            Left Message Machine
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option3" value="option3">
                            Left Message Person
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option4" value="option4">
                            Spoke With
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option5" value="option5">
                            Sent Email
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option6" value="option6">
                            Sent Fax
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option7" value="option7">
                            No Sale
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option8" value="option8">
                            Disconnected
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option9" value="option9">
                            Sold
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option10" value="option10">
                            Government
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_status" id="option11" value="option11">
                            No Answer
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
    
<div class="modal fade" id="job-stage" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div>
                    <h4>
                        Stage
                    </h4>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option12" value="option12" checked>
                            Collected
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option13" value="option13">
                            Invoiced
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option14" value="option14">
                            Direct Bill
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option15" value="option15">
                            Cancelled
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option16" value="option16">
                            Written Up
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="options_stage" id="option17" value="option17">
                            Return to Rep
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>