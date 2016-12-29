<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">

    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-primary" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <p class="panel-title pull-left"><?php echo $job["name"] . " - " . $job["year"]; ?></p>
                        <a class="btn btn-success btn-sm pull-right"
                           href="<?php echo base_url('/jobs/' . $job["id"] . '/' . $job["year"] . '/leads'); ?>">
                            Lead List
                        </a>

                        <?php if (has_perm("add_leads", $user)): ?>
                        <a class="btn btn-info btn-sm pull-right" style="margin-right: 5px"
                           href="<?php echo base_url('/leads/add/' . $job["id"] . '/' . $job["year"]); ?>">
                            Add New Lead
                        </a>
                        <?php endif; ?>

                        <?php if (has_perm("clone_jobs", $user)): ?>
                        <button class="btn btn-info btn-sm pull-right" style="margin-right: 5px">
                            Clone
                        </button>
                        <?php endif; ?>

                        <?php if (has_perm("start_end_jobs", $user)): ?>
                            <?php if ($job["status"] == "active"): ?>
                                <a class="btn btn-info btn-sm pull-right" style="margin-right: 5px"
                                   href="<?php echo base_url('/jobs/' . $job["id"] . '/' . $job["year"] . '/deactivate'); ?>">
                                    Deactivate
                                </a>
                            <?php else: ?>
                                <a class="btn btn-info btn-sm pull-right" style="margin-right: 5px"
                                   href="<?php echo base_url('/jobs/' . $job["id"] . '/' . $job["year"] . '/activate'); ?>">
                                    Activate
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <?php echo form_open('', array('class'=>'form-job-edit'), array("job-id" => $job["id"])); ?>

                        <!-- Main left panel -->
                        <div class="col-md-9">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- General Job Info -->
                                    <div class="panel panel-default col-md-6">
                                        <div class="panel-body">
                                            <div class="btn-group form-group" data-toggle="buttons">
                                                <label class="btn btn-primary <?php echo ($job["type"] == "dare") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_dare',
                                                        'class' => 'radio',
                                                        "value" => "dare",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "dare"))); ?>
                                                    Dare
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "explorers") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_explorers',
                                                        'class' => 'radio',
                                                        "value" => "explorers",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "explorers"))); ?>
                                                    Explorers
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "sheriff") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_sheriff',
                                                        'class' => 'radio',
                                                        "value" => "sheriff",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "sheriff"))); ?>
                                                    Sheriff's Office
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "police") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_police',
                                                        'class' => 'radio',
                                                        "value" => "police",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "police"))); ?>
                                                    Police Dept
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "fire") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_fire',
                                                        'class' => 'radio',
                                                        "value" => "fire",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "fire"))); ?>
                                                    Fire Dept
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "ems") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_ems',
                                                        'class' => 'radio',
                                                        "value" => "ems",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "ems"))); ?>
                                                    EMS
                                                </label>
                                                <label class="btn btn-primary <?php echo ($job["type"] == "other") ? "active" : "" ?>">
                                                    <?php echo form_radio(array('name' => 'type',
                                                        'id' => 'job_type_other',
                                                        'class' => 'radio',
                                                        "value" => "other",
                                                        is_enabled("edit_jobs", $user["permissions"]) => "",
                                                        "checked" => ($job["type"] == "other"))); ?>
                                                    Other
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="type_other_note">If Job Type is "Other":</label>
                                                <?php echo form_input(array('id' => 'type_other_note',
                                                        "name" => "type_other_note",
                                                        'class' => 'form-control',
                                                        "value" => $job["type_other_note"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="job_name">Year:</label>
                                                <?php echo form_input(array('id' => 'year',
                                                        "name" => "year",
                                                        'class' => 'form-control',
                                                        "value" => $job["year"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="year">Job Name:</label>
                                                <?php echo form_input(array('id' => 'name',
                                                        "name" => "name",
                                                        'class' => 'form-control',
                                                        "value" => $job["name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status:</label>
                                                <?php echo form_input(array('id' => 'status',
                                                        "name" => "status",
                                                        'class' => 'form-control',
                                                        "value" => $job["status"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="first_name">Primary Contact First Name:</label>
                                                <?php echo form_input(array('id' => 'contact_first_name',
                                                        "name" => "contact_first_name",
                                                        'class' => 'form-control',
                                                        "value" => $job["contact_first_name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Primary Contact Last Name:</label>
                                                <?php echo form_input(array('id' => 'contact_last_name',
                                                        "name" => "contact_last_name",
                                                        'class' => 'form-control',
                                                        "value" => $job["contact_last_name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Primary Contact Email Address:</label>
                                                <?php echo form_input(array('id' => 'contact_email',
                                                        "name" => "contact_email",
                                                        'class' => 'form-control',
                                                        "value" => $job["contact_email"])); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address Info -->
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
                                                            <label for="physical_address">Physical Address:</label>
                                                            <?php echo form_input(array('id' => 'physical_address',
                                                                "name" => "physical_address",
                                                                'class' => 'form-control',
                                                                "value" => $job["physical_address"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_city">City:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_city',
                                                                "name" => "physical_address_city",
                                                                'class' => 'form-control',
                                                                "value" => $job["physical_address_city"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_state">State:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_state',
                                                                "name" => "physical_address_state",
                                                                'class' => 'form-control',
                                                                "value" => $job["physical_address_state"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_zip">Zip:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_zip',
                                                                "name" => "physical_address_zip",
                                                                'class' => 'form-control',
                                                                "value" => $job["physical_address_zip"])); ?>
                                                        </div>

                                                        <div class="alert alert-warning">
                                                            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="address-mailing">
                                                        <div class="form-group">
                                                            <label for="mailing_address">Mailing Address:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address',
                                                                "name" => "mailing_address",
                                                                'class' => 'form-control',
                                                                "value" => $job["mailing_address"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_city">City:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_city',
                                                                "name" => "mailing_address_city",
                                                                'class' => 'form-control',
                                                                "value" => $job["mailing_address_city"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_state">State:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_state',
                                                                "name" => "mailing_address_state",
                                                                'class' => 'form-control',
                                                                "value" => $job["mailing_address_state"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_zip">Zip:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_zip',
                                                                "name" => "mailing_address_zip",
                                                                'class' => 'form-control',
                                                                "value" => $job["mailing_address_zip"])); ?>
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
                            </div>
                        </div>
                        <?php echo form_close(); ?>

                        <!-- Notes Panel -->
                        <div class="panel panel-default col-md-3">
                            <div class="panel-body">
                                <h4 class="pull-left">Notes</h4>
                                <button class="pull-right btn btn-primary btn-xs" id="btn-add-note">Add Note</button>
                                <div class="form-group">

                                    <div>
                                      <textarea class="form-control" rows="3" id="job-new-note"></textarea>
                                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                    </div>
                                </div>

                                <table class="table table-condensed" id="notes-table">
                                    <?php foreach ($job["notes"] as $note): ?>
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
                    Job: <?php echo json_encode($job); ?>
                    <br>
                    Post Data: <?php echo json_encode($post_data); ?>
                </div>
            </div>
        </div>
    </div>
</div>
