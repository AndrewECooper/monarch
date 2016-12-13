<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-default" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <span class="panel-title"><?php echo $lead_name; ?></span>
                    </div>
                </div>
                <div class="panel-body">                        
                    <div class="container-fluid">
                        <form>
                            <div class="col-md-9">
                                <div class="btn-group form-group" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>Dare
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Explorers
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option3" autocomplete="off">Sheriff's Office
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Police Dept
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Fire Dept
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">EMS
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Other
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="type_other_note">If Job Type is "Other":</label>
                                    <input type="text" class="form-control" id="type_other_note">
                                </div>
                                <div class="form-group">
                                    <label for="job_name">Job Name:</label>
                                    <input type="text" class="form-control" id="job_name">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" class="form-control" id="status">
                                </div>
                                <div class="form-group">
                                    <label for="first_name">Primary Contant First Name:</label>
                                    <input type="text" class="form-control" id="first_name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Primary Contant First Name:</label>
                                    <input type="text" class="form-control" id="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Primary Contant Email Address:</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="physical_address">Physical Address:</label>
                                    <input type="text" class="form-control" id="physical_address">
                                </div>
                                <div class="form-group">
                                    <label for="mailing_address">Mailing Address:</label>
                                    <input type="text" class="form-control" id="mailing_address">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes:</label>
                                    <textarea class="form-control" rows="5" id="notes"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Start Date:</label>
                                    <input type="text" class="form-control" id="start_date">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">
                                        End Job (only if admin)
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">
                                        Clone Job (only if ended)
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

