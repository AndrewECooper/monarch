<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-default" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <span class="panel-title">Active Jobs</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <?php for ($x = 0; $x < 10; $x++):  ?>
                            
                            <?php if ($x % 4 == 0): ?>
                                <?php if ($x > 0): ?>
                                </div>
                                <?php endif; ?>
                    
                            <div class="row">
                            <?php endif; ?> 
                                
                            <div class="col-md-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <a class="panel-title" href="#">Job <?php echo $x + 1; ?></a>
                                        <a class="panel-title pull-right" href="<?php echo base_url('/jobs/' . $x . '/leads'); ?>">Leads</a>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table-striped" width="100%">
                                            <tbody>
                                                <tr>
                                                    <th>Sales (week)</th>
                                                    <td>$234.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Collected (week)</th>
                                                    <td>$234.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Collector</th>
                                                    <td>Fred</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Letter</a></td>
                                                    <td><a href="#">Calendar</a></td>
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

