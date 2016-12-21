<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="panel-title pull-left">Employees</p>
                <a class="btn btn-info btn-sm pull-right" href="/users/add">Add New</a>
                <div class="clearfix"></div>
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
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($employees as $employee): ?>
                            <tr>
                                <td>
                                    <?php echo $employee["last_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $employee["first_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $employee["username"]; ?>
                                </td>
                                <td>
                                    <?php echo $employee["email"]; ?>
                                </td>
                                <td>
                                    <a href="/users/<?php echo $employee["id"]; ?>">Edit</a>
                                </td>
                                <td>
                                    <a href="/users/delete/<?php echo $employee["id"]; ?>">Delete</a>
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