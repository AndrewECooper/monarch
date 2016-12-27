<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-primary" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <span class="panel-title">Leads for <?php echo $job_name; ?></span>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Primary Phone</th>
                                <th>Alternate Phone</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <?php foreach($leads as $lead):  ?>    
                            <tr>
                                <td>
                                    <?php echo $lead["status"] ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('/leads/' . $lead["id"]); ?>">
                                        <?php echo $lead["company_name"]; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $lead["contact_first_name"] . " " . $lead["contact_last_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $lead["primary_phone"]; ?>
                                </td>
                                <td>
                                    <?php echo $lead["alternate_phone"]; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

