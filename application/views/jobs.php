<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-primary" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <span class="panel-title">Active Jobs</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        Year
                                    </th>
                                    <th>
                                        Job
                                    </th>
                                    <th>
                                        Sales
                                    </th>
                                    <th>
                                        Collected
                                    </th>
                                    <th>
                                        Collector
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($jobs as $job): ?>
                                <tr>
                                    <td>
                                        <?php echo $job["year"]; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('/jobs/' . $job["id"]); ?>">
                                            <?php echo $job["name"]; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $job["sales"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $job["collected"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $job["collector"]; ?>
                                    </td>
                                    <td>
                                        Letter
                                    </td>
                                    <td>
                                        Calendar
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('/jobs/' . $job["id"] . '/leads'); ?>">
                                            Leads
                                        </a>
                                    </td>
                                    <td>
                                        Clone
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
</div>

