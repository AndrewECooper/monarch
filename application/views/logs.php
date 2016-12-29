<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="panel-title pull-left">Logs</p>
                <?php echo form_open('', array('class'=>'form-inline pull-right form-user-edit')); ?>
                    <div class="form-group form-group-sm">
                        <label for="filter_text" class="panel-title" style="margin-right: 5px">Filter Text</label>
                        <input type="text" class="form-control" name="filter_text" id="filter_text"
                            value="<?php echo $filter_data["filter_text"]; ?>">
                    </div>
                    <div class="form-group form-group-sm">
                        <select class="form-control" name="filter_type" >
                            <option value="none" <?php echo $filter_data["filter_type"] == "none" ? "selected" : ""; ?>>
                                None
                            </option>
                            <option value="first_name" <?php echo $filter_data["filter_type"] == "first_name" ? "selected" : ""; ?>>
                                First Name
                            </option>
                            <option value="last_name" <?php echo $filter_data["filter_type"] == "last_name" ? "selected" : ""; ?>>
                                Last Name
                            </option>
                            <option value="username" <?php echo $filter_data["filter_type"] == "username" ? "selected" : ""; ?>>
                                Username
                            </option>
                            <option value="code" <?php echo $filter_data["filter_type"] == "code" ? "selected" : ""; ?>>
                                Code
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm">Filter Logs</button>
                <?php echo form_close(); ?>
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
                            <?php foreach($logs as $job): ?>
                            <tr>
                                <td>
                                    <?php echo $job["last_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $job["first_name"]; ?>
                                </td>
                                <td>
                                    <?php echo $job["username"]; ?>
                                </td>
                                <td width="250px">
                                    <?php echo $job["short_description"]; ?>
                                </td>
                                <td style="word-break: break-word">
                                    <?php echo $job["description"]; ?>
                                </td>
                                <td>
                                    <?php echo $job["code"]; ?>
                                </td>
                                <td width="150px">
                                    <?php echo $job["created"]; ?>
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
