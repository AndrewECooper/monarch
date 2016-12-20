<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="panel-title pull-left">
                    2MCS Billing Svc
                </h2>
                
                <button type="button" data-toggle="modal" data-target="#job-stage" class="btn btn-info pull-right btn-xs">
                    Invoiced
                </button>
                <button data-toggle="modal" data-target="#job-status" 
                        class="btn btn-info pull-right btn-xs" style="margin-right: 5px">
                    Left Message Machine
                </button>
                
                <div class="pull-right" style="margin-right: 20px">
                    Salesman / Collector
                </div>
                
                <div class="pull-right" style="margin-right: 20px">
                    Line of Business
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
                                                <input type="text" class="form-control input-sm" id="contact_first_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_last_name">Last Name:</label>
                                                <input type="text" class="form-control input-sm" id="contact_last_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_email">Email:</label>
                                                <input type="email" class="form-control" id="contact_email">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_phone_primary">Primary Phone:</label>
                                                <input type="text" class="form-control" id="contact_phone_primary">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_phone_alternate">Alternate Phone:</label>
                                                <input type="text" class="form-control" id="contact_phone_alternate">
                                            </div>

                                            <button class="btn btn-primary">Submit Changes</button>
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
                                                            <label for="contact_address_physical_address">Address:</label>
                                                            <input type="text" class="form-control input-sm" id="contact_address_physical_address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_city">City:</label>
                                                            <input type="text" class="form-control input-sm" id="contact_address_physical_city">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_state">State:</label>
                                                            <input type="text" class="form-control" id="contact_address_physical_state">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_zip">Zip Code:</label>
                                                            <input type="text" class="form-control" id="contact_address_physical_zip">
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="address-mailing">
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_address">Address:</label>
                                                            <input type="text" class="form-control input-sm" id="contact_address_physical_address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_city">City:</label>
                                                            <input type="text" class="form-control input-sm" id="contact_address_physical_city">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_state">State:</label>
                                                            <input type="text" class="form-control" id="contact_address_physical_state">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact_address_physical_zip">Zip Code:</label>
                                                            <input type="text" class="form-control" id="contact_address_physical_zip">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                    <tr>
                                        <th>
                                            01/01/2016
                                        </th>
                                        <td>
                                            This is a really cool note.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            01/02/2016
                                        </th>
                                        <td>
                                            Top Cat! The most effectual Top Cat! Who's intellectual close friends get to call him T.C., providing it's with dignity. Top Cat! The indisputable leader of the gang. He's the boss, he's a pip, he's the championship. He's the most tip top, Top Cat.
                                        </td>
                                    </tr>
                                    <tr class="warning">
                                        <th>
                                            01/07/2016
                                        </th>
                                        <td>
                                            This is a really cool note. You should pay attention to it.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            01/10/2016
                                        </th>
                                        <td>
                                            This is my boss, Jonathan Hart, a self-made millionaire, he's quite a guy. This is Mrs H., she's gorgeous, she's one lady who knows how to take care of herself. By the way, my name is Max. I take care of both of them, which ain't easy, 'cause when they met it was MURDER!
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            01/01/2016
                                        </th>
                                        <td>
                                            This is a really cool note.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            01/02/2016
                                        </th>
                                        <td>
                                            Top Cat! The most effectual Top Cat! Who's intellectual close friends get to call him T.C., providing it's with dignity. Top Cat! The indisputable leader of the gang. He's the boss, he's a pip, he's the championship. He's the most tip top, Top Cat.
                                        </td>
                                    </tr>
                                    <tr class="warning">
                                        <th>
                                            01/07/2016
                                        </th>
                                        <td>
                                            This is a really cool note. You should pay attention to it.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            01/10/2016
                                        </th>
                                        <td>
                                            This is my boss, Jonathan Hart, a self-made millionaire, he's quite a guy. This is Mrs H., she's gorgeous, she's one lady who knows how to take care of herself. By the way, my name is Max. I take care of both of them, which ain't easy, 'cause when they met it was MURDER!
                                        </td>
                                    </tr>
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