<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-default" style="margin-right: 10px">
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
                                <th>Lead Name</th>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Phone</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <?php for ($x = 0; $x < 10; $x++):  ?>    
                            <tr>
                                <td>
                                    New Lead
                                </td>
                                <td>
                                    <a href="<?php echo base_url('/leads/' . $x); ?>">
                                        Lead <?php echo $x + 1; ?>
                                    </a>
                                </td>
                                <td>
                                    Some Company
                                </td>
                                <td>
                                    Billy Joe Tom Bob Parker
                                </td>
                                <td>
                                    956-753-0007
                                </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

