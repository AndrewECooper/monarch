<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">

    <!-- Active Jobs -->
    <div class="col-md-9" style="padding-left: 0px">
        <div class="panel panel-primary" style="margin-right: 10px">
            <div class="panel-heading">
                <div class="panel-heading">
                    <span class="panel-title">Active Jobs</span>
                </div>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <?php foreach ($jobs["active"] as $job) :  ?>
                        <?php if ($row_count == 0 || $row_count % 3 == 0): ?>
                            <?php if ($row_count != 0): ?>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                        <?php endif; ?>
                        <div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <a class="panel-title"
                                        href="<?php echo base_url('/jobs/' . $job["id"] . "/" . $job["year"]); ?>">
                                        <?php echo $job["name"]; ?>
                                    </a>
                                    <a class="panel-title pull-right"
                                        href="<?php echo base_url('/jobs/' . $job["id"] . "/" . $job["year"] . "/leads"); ?>">
                                        Leads
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped" width="100%">
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
                                                <td><a href="#">Letter</a></td>
                                                <td><a href="#">Calendar</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php
                        $row_count++;
                        endforeach;
                    ?>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3" style="padding-left: 0px">
        <div class="panel panel-danger" style="margin-right: 10px">
            <div class="panel-heading">
                <div class="panel-heading">
                    <span class="panel-title">Reminders</span>
                </div>
            </div>
            <div class="panel-body">
                <a class="btn btn-success btn-block" href="#" style="white-space: normal">
                    Do some really cool thing.
                </a>
                <a class="btn btn-success btn-block" href="#" style="white-space: normal">
                    Do some other really cool thing.
                </a>
                <a class="btn btn-success btn-block" href="#" style="white-space: normal">
                    Call your mother!
                </a>
            </div>
            <div class="panel-footer">
                Not implemented yet...
            </div>
        </div>
    </div>
</div>
