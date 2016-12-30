<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?php echo $lead_heading; ?>
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#general-info" data-toggle="tab">
                            General Information
                        </a>
                    </li>
                    <li>
                        <a href="#artwork" data-toggle="tab">
                            Artwork
                        </a>
                    </li>
                    <li>
                        <a href="#financial" data-toggle="tab">
                            Financial
                        </a>
                    </li>
                </ul>

                <div id="main-tab-content" class="tab-content">
                    <div class="tab-pane fade active in" id="general-info">
                        <div class="container-fluid">
                            <div class="row" style="margin-top: 10px">
                                <?php echo form_open('', array('class'=>'form-lead-edit'), array("lead-id" => $lead["id"])); ?>
                                <div class="col-md-8">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <!-- Contact Info -->
                                            <div class="col-md-6 panel panel-default">
                                                <div class="panel-body">
                                                    <?php echo $general_info; ?>
                                                </div>
                                            </div>

                                            <!-- Addresses -->
                                            <div class="col-md-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <?php echo $addresses; ?>
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
                                    </div>
                                </div>
                                <?php echo form_close(); ?>

                                <!-- Notes -->
                                <div class="col-md-4 panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $notes; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="artwork">
                        <div class="container-fluid" style="margin-top: 10px">
                            <!-- Artwork -->
                            <div class="col-md-12 panel panel-primary">
                                <div class="panel-body">
                                    <?php echo $artwork; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="financial">
                        <div class="container-fluid" style="margin-top: 10px">
                            <div class="col-md-12 panel panel-primary">
                                <div class="panel-body">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $edit_status_dialog; ?>

<?php echo $edit_stage_dialog; ?>

<?php echo $edit_sales_collector_dialog; ?>
