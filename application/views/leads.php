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
                    <div class="container-fluid">
                        <?php for ($x = 0; $x < 10; $x++):  ?>
                            
                            <?php if ($x % 3 == 0): ?>
                                <?php if ($x > 0): ?>
                                </div>
                                <?php endif; ?>
                    
                            <div class="row">
                            <?php endif; ?> 
                                
                            <div class="col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <a class="panel-title" href="<?php echo base_url('/leads/' . $x); ?>">
                                            Lead <?php echo $x + 1; ?>
                                        </a>
                                        <span class="pull-right">
                                            Status!
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table-striped" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>Company</th>
                                                    <td>Some Company</td>
                                                </tr>
                                                <tr>
                                                    <th>Contact</th>
                                                    <td>Billy Joe Tom Bob Parker</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>956-753-0007</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

