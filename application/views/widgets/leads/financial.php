<div class="container_fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="row">
                    <h4>Sale Information</h4>
                    <div class="form-group col-md-6">
                        <label class="control-label">Sale Amount</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="<?php echo $lead["sale_amount"]; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button">Change</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label">Ad Type</label>
                        <div class="input-group">
                            <select class="form-control" id="select-ad-type">
                                <option value="single" <?php echo $lead["ad_type"] == "single" ? "selected" : "" ?>>
                                    Single
                                </option>
                                <option value="double"<?php echo $lead["ad_type"] == "double" ? "selected" : "" ?>>
                                    Double
                                </option>
                                <option value="feature"<?php echo $lead["ad_type"] == "feature" ? "selected" : "" ?>>
                                    Feature
                                </option>
                                <option value="banner"<?php echo $lead["ad_type"] == "banner" ? "selected" : "" ?>>
                                    Banner
                                </option>
                            </select>
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button">Change</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>Collected</h4>
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Check #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lead["collected"] as $transaction): ?>
                                <tr>
                                    <td><?php echo $transaction["created"]; ?></td>
                                    <td><?php echo $transaction["amount"]; ?></td>
                                    <td><?php echo $transaction["payment_type"]; ?></td>
                                    <td><?php echo $transaction["check_number"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button class="btn btn-info">New Transaction</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Invoices</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Invoice #</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lead["invoices"] as $invoice): ?>
                    <tr>
                        <td><?php echo $invoice["created"]; ?></td>
                        <td><?php echo $invoice["amount"]; ?></td>
                        <td><?php echo $invoice["invoice_number"]; ?></td>
                        <td><a href="#">Download</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button class="btn btn-info">Create Invoice</button>
        </div>
    </div>
</div>
