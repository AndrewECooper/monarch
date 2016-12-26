<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    
    <!-- Active Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-primary" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <p class="panel-title pull-left">Active Jobs</p>
                        <a class="btn btn-info btn-sm pull-right" href="<?php echo base_url("/jobs/add"); ?>">Add Job</a>
                        <div class="clearfix"></div>
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
                                        Invoiced
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
                                <?php foreach($jobs["active"] as $job): ?>
                                <tr>
                                    <td>
                                        <?php echo $job["year"]; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url("/jobs/" . $job["id"] . "/" . $job["year"]); ?>">
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
                                        <?php echo $job["invoiced"]; ?>
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
    
    <?php if (has_perm("view_all_jobs", $user)): ?>
    <!-- Inactive Jobs -->
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px">
            <div class="panel panel-warning" style="margin-right: 10px">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <p class="panel-title pull-left">Inactive Jobs</p>
                        <div class="clearfix"></div>
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
                                        Invoiced
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
                                <?php foreach($jobs["inactive"] as $job): ?>
                                <tr>
                                    <td>
                                        <?php echo $job["year"]; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url("/jobs/" . $job["id"] . "/" . $job["year"]); ?>">
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
                                        <?php echo $job["invoiced"]; ?>
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
    <?php endif; ?>
</div>

