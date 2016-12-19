<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    
    <!-- Active Jobs -->
    <div class="row">
        <!--  style="padding-left: 0px" -->
        <div class="col-md-12">
            <!--  style="margin-right: 10px" -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <span class="panel-title"><?php echo $lead_name; ?></span>
                    </div>
                </div>
                <div class="panel-body">                        
                    <div class="container-fluid">
                        <form>
                            <div class="row">
                            <div class="panel panel-default col-md-4">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="contact_first_name">First Name:</label>
                                        <input type="text" class="form-control input-sm" id="contact_first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_last_name">Last Name:</label>
                                        <input type="text" class="form-control input-sm" id="contact_last_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <h4>
                                        Mailing Address
                                    </h4>
                                    <div class="form-group">
                                        <label for="mailing_address_line_1">Address Line 1:</label>
                                        <input type="text" class="form-control" id="mailing_address_line_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="mailing_address_line_2">Address Line 2:</label>
                                        <input type="text" class="form-control" id="mailing_address_line_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="mailing_address_city">City:</label>
                                        <input type="text" class="form-control" id="mailing_address_city">
                                    </div>
                                    <div class="form-group">
                                        <label for="mailing_address_state">State:</label>
                                        <input type="text" class="form-control" id="mailing_address_state">
                                    </div>
                                    <div class="form-group">
                                        <label for="mailing_address_zip">Zip:</label>
                                        <input type="text" class="form-control" id="mailing_address_zip">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <div class="panel panel-default col-md-2">
                            <div class="panel-body">
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
                        <div class="col-md-2">
                            <div class="panel-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

