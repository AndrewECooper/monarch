<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title pull-left" style="margin-right: 20px">
                    <?php echo $lead["company_name"]; ?>
                </div>

                <div class="panel-title pull-left">
                    (<?php echo $lead["line_of_business"]; ?>)
                </div>

                <button type="button" class="btn btn-info pull-right btn-xs" id="btn-stage">
                    <?php echo $lead["stage"]; ?>
                </button>
                <button type="button" class="btn btn-info pull-right btn-xs" id="btn-status"
                    style="margin-right: 5px">
                    <?php echo $lead["status"]; ?>
                </button>

                <button type="button" class="btn btn-info btn-xs pull-right" id="btn-sales" style="margin-right: 5px">
                    <?php echo $lead["salesman"]; ?> / <?php echo $lead["collector"]; ?>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <?php echo form_open('', array('class'=>'form-lead-edit'), array("lead-id" => $lead["id"])); ?>
                        <div class="col-md-8">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Contact Info -->
                                    <div class="col-md-6 panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="company_name">Company Name:</label>
                                                <?php echo form_input(array('id' => 'company_name',
                                                        "name" => "company_name",
                                                        'class' => 'form-control',
                                                        "value" => $lead["company_name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="company_name">Line of Business:</label>
                                                <?php echo form_input(array('id' => 'line_of_business',
                                                        "name" => "line_of_business",
                                                        'class' => 'form-control',
                                                        "value" => $lead["line_of_business"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_first_name">First Name:</label>
                                                <?php echo form_input(array('id' => 'contact_first_name',
                                                        "name" => "contact_first_name",
                                                        'class' => 'form-control',
                                                        "value" => $lead["contact_first_name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_last_name">Last Name:</label>
                                                <?php echo form_input(array('id' => 'contact_last_name',
                                                        "name" => "contact_last_name",
                                                        'class' => 'form-control',
                                                        "value" => $lead["contact_last_name"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_email">Email:</label>
                                                <?php echo form_input(array('id' => 'contact_email',
                                                        "name" => "contact_email",
                                                        'class' => 'form-control',
                                                        "value" => $lead["contact_email"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="primary_phone">Primary Phone:</label>
                                                <?php echo form_input(array('id' => 'primary_phone',
                                                        "name" => "primary_phone",
                                                        'class' => 'form-control',
                                                        "value" => $lead["primary_phone"])); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="alternate_phone">Alternate Phone:</label>
                                                <?php echo form_input(array('id' => 'alternate_phone',
                                                        "name" => "alternate_phone",
                                                        'class' => 'form-control',
                                                        "value" => $lead["alternate_phone"])); ?>
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
                                                            <?php echo form_input(array('id' => 'physical_address',
                                                                "name" => "physical_address",
                                                                'class' => 'form-control',
                                                                "value" => $lead["physical_address"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_city">City:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_city',
                                                                "name" => "physical_address_city",
                                                                'class' => 'form-control',
                                                                "value" => $lead["physical_address_city"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_state">State:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_state',
                                                                "name" => "physical_address_state",
                                                                'class' => 'form-control',
                                                                "value" => $lead["physical_address_state"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_zip">Zip Code:</label>
                                                            <?php echo form_input(array('id' => 'physical_address_zip',
                                                                "name" => "physical_address_zip",
                                                                'class' => 'form-control',
                                                                "value" => $lead["physical_address_zip"])); ?>
                                                        </div>
                                                        <div class="alert alert-warning">
                                                            <h4>If Mailing Address is not set, the Physical Address will be used.</h4>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="address-mailing">
                                                        <div class="form-group">
                                                            <label for="mailing_address">Address:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address',
                                                                "name" => "mailing_address",
                                                                'class' => 'form-control',
                                                                "value" => $lead["mailing_address"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_city">City:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_city',
                                                                "name" => "mailing_address_city",
                                                                'class' => 'form-control',
                                                                "value" => $lead["mailing_address_city"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_state">State:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_state',
                                                                "name" => "mailing_address_state",
                                                                'class' => 'form-control',
                                                                "value" => $lead["mailing_address_state"])); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_zip">Zip Code:</label>
                                                            <?php echo form_input(array('id' => 'mailing_address_zip',
                                                                "name" => "mailing_address_zip",
                                                                'class' => 'form-control',
                                                                "value" => $lead["mailing_address_zip"])); ?>
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
                                                is_enabled("edit_leads", $user["permissions"]) => "",),
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
                                <button class="pull-right btn btn-primary btn-xs" id="btn-add-note">Add Note</button>
                                <div class="form-group">

                                    <div>
                                      <textarea class="form-control" rows="3" id="job-new-note"></textarea>
                                      <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                    </div>
                                </div>

                                <table class="table table-condensed" id="notes-table">
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

<div id="dialog-status" title="Edit Status">
    <h4>
        Status
    </h4>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option1" value="New Lead"
                <?php echo $lead["status"] == "New Lead" ? "checked" : ""; ?>>
            New Lead
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option2" value="Left Message Machine"
                <?php echo $lead["status"] == "Left Message Machine" ? "checked" : ""; ?>>
            Left Message Machine
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option3" value="Left Message Person"
                <?php echo $lead["status"] == "Left Message Person" ? "checked" : ""; ?>>
            Left Message Person
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option4" value="Spoke With"
                <?php echo $lead["status"] == "Spoke With" ? "checked" : ""; ?>>
            Spoke With
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option5" value="Sent Email"
                <?php echo $lead["status"] == "Sent Email" ? "checked" : ""; ?>>
            Sent Email
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option6" value="Sent Fax"
                <?php echo $lead["status"] == "Sent Fax" ? "checked" : ""; ?>>
            Sent Fax
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option7" value="No Sale"
                <?php echo $lead["status"] == "No Sale" ? "checked" : ""; ?>>
            No Sale
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option8" value="Disconnected"
                <?php echo $lead["status"] == "Disconnected" ? "checked" : ""; ?>>
            Disconnected
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option9" value="Sold"
                <?php echo $lead["status"] == "Sold" ? "checked" : ""; ?>>
            Sold
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option10" value="Government"
                <?php echo $lead["status"] == "Government" ? "checked" : ""; ?>>
            Government
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_status" id="option11" value="No Answer"
                <?php echo $lead["status"] == "No Answer" ? "checked" : ""; ?>>
            No Answer
        </label>
    </div>
</div>

<div id="dialog-stage" title="Edit Stage">
    <h4>
        Stage
    </h4>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option12" value="Collected"
                <?php echo $lead["stage"] == "Collected" ? "checked" : ""; ?>>
            Collected
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option13" value="Invoiced"
                <?php echo $lead["stage"] == "Invoiced" ? "checked" : ""; ?>>
            Invoiced
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option14" value="Direct Bill"
                <?php echo $lead["stage"] == "Direct Bill" ? "checked" : ""; ?>>
            Direct Bill
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option15" value="Cancelled"
                <?php echo $lead["stage"] == "Cancelled" ? "checked" : ""; ?>>
            Cancelled
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option16" value="Written Up"
                <?php echo $lead["stage"] == "Written Up" ? "checked" : ""; ?>>
            Written Up
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="options_stage" id="option17" value="Return to Rep"
                <?php echo $lead["stage"] == "Return to Rep" ? "checked" : ""; ?>>
            Return to Rep
        </label>
    </div>
</div>

<div id="dialog-sales" title="Edit Sales / Collector">
    <select id="options-sales" class="form-control" style="margin-bottom: 10px">
        <?php foreach ($sales as $employee): ?>
        <option value="<?php echo $employee["id"]; ?>" <?php echo $employee["id"] == $lead["sales_id"] ? "selected" : "" ?>>
            <?php echo $employee["last_name"] . ", " . $employee["first_name"]; ?>
        </option>
        <?php endforeach; ?>
    </select>

    <select id="options-collector" class="form-control" style="margin-bottom: 10px">
        <?php foreach ($collectors as $employee): ?>
        <option value="<?php echo $employee["id"]; ?>" <?php echo $employee["id"] == $lead["collector_id"] ? "selected" : "" ?>>
            <?php echo $employee["last_name"] . ", " . $employee["first_name"]; ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>
