<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="panel-title">Logs</p>
            </div>
            <div class="panel-primary">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Last Name
                                </th>
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Short Description
                                </th>
                                <th>
                                    Details
                                </th>
                                <th>
                                    Code
                                </th>
                                <th>
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($logs as $log): ?>
                            <tr>
                                <td>
                                    <?php echo $log["last_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $log["first_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $log["username"]; ?>
                                </td>
                                <td width="250px">
                                    <?php echo $log["short_description"]; ?>
                                </td>
                                <td style="word-break: break-word">
                                    <?php echo $log["description"]; ?>
                                </td>
                                <td>
                                    <?php echo $log["code"]; ?>
                                </td>
                                <td width="150px">
                                    <?php echo $log["created"]; ?>
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