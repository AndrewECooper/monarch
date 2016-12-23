<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-primary" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <p class="panel-title pull-left"><?php echo $job["name"] . " - " . $job["year"]; ?></p>
                        <a class="btn btn-success btn-sm pull-right" href="<?php echo base_url('/jobs/' . $job["id"] . '/leads'); ?>">
                            Lead List
                        </a>
                        
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
                        
                        <!-- Main left panel -->
                        <div class="col-md-9">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- General Job Info -->
                                    <div class="panel panel-default col-md-6">
                                        <div class="panel-body">
                                            <div class="btn-group form-group" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" 
                                                        <?php echo ($job["type"] == "dare") ? "checked" : ""; ?>>
                                                    Dare
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off" 
                                                        <?php echo ($job["type"] == "explorers") ? "checked" : ""; ?>>
                                                    Explorers
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option3" autocomplete="off"
                                                            <?php echo ($job["type"] == "sheriff") ? "checked" : ""; ?>>
                                                    Sheriff's Office
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"
                                                            <?php echo ($job["type"] == "police") ? "checked" : ""; ?>>
                                                    Police Dept
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"
                                                            <?php echo ($job["type"] == "fire") ? "checked" : ""; ?>>
                                                    Fire Dept
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"
                                                            <?php echo ($job["type"] == "ems") ? "checked" : ""; ?>>
                                                    EMS
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off"
                                                            <?php echo ($job["type"] == "other") ? "checked" : ""; ?>>
                                                    Other
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="type_other_note">If Job Type is "Other":</label>
                                                <input type="text" class="form-control" id="type_other_note">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_name">Job Name:</label>
                                                <input type="text" class="form-control" id="job_name" 
                                                       value="<?php echo $job["name"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status:</label>
                                                <input type="text" class="form-control" id="status" 
                                                       value="<?php echo $job["status"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="first_name">Primary Contact First Name:</label>
                                                <input type="text" class="form-control" id="first_name" 
                                                       value="<?php echo $job["contact_first_name"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Primary Contact First Name:</label>
                                                <input type="text" class="form-control" id="last_name" 
                                                       value="<?php echo $job["contact_last_name"]; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Primary Contact Email Address:</label>
                                                <input type="email" class="form-control" id="email" 
                                                       value="<?php echo $job["contact_email"]; ?>">
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
                                                            <input type="text" class="form-control" id="physical_address" 
                                                                value="<?php echo $job["physical_address"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_city">City:</label>
                                                            <input type="text" class="form-control" id="physical_address_city"
                                                                   value="<?php echo $job["physical_address_city"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_state">State:</label>
                                                            <input type="text" class="form-control" id="physical_address_state"
                                                                   value="<?php echo $job["physical_address_state"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="physical_address_zip">Zip:</label>
                                                            <input type="text" class="form-control" id="physical_address_zip"
                                                                   value="<?php echo $job["physical_address_zip"]; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="address-mailing">
                                                        <div class="form-group">
                                                            <label for="mailing_address">Mailing Address:</label>
                                                            <input type="text" class="form-control" id="mailing_address"
                                                                   value="<?php echo $job["mailing_address"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_city">City:</label>
                                                            <input type="text" class="form-control" id="mailing_address_city"
                                                                   value="<?php echo $job["mailing_address_city"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_state">State:</label>
                                                            <input type="text" class="form-control" id="mailing_address_state"
                                                                   value="<?php echo $job["mailing_address_state"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mailing_address_zip">Zip:</label>
                                                            <input type="text" class="form-control" id="mailing_address_zip"
                                                                   value="<?php echo $job["mailing_address_zip"]; ?>">
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
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Notes Panel -->
                        <div class="panel panel-default col-md-3">
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
                </div>
            </div>
        </div>
    </div>
</div>

