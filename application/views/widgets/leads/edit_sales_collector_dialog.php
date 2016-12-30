<div id="dialog-sales" title="Edit Sales / Collector">
    <select id="options-sales" class="form-control" style="margin-bottom: 10px">
        <?php foreach ($sales as $employee): ?>
        <option value="<?php echo $employee["id"]; ?>" <?php echo $employee["id"] == $lead["sales_id"] ? "selected" : "" ?>>
            <?php echo $employee["last_name"] . ", " . $employee["first_name"]; ?>
        </option>
        <?php endforeach; ?>
    </select>

    <select id="options-collector" class="form-control" style="margin-bottom: 10px">
        <?php foreach ($collectors as $employee): ?>
        <option value="<?php echo $employee["id"]; ?>" <?php echo $employee["id"] == $lead["collector_id"] ? "selected" : "" ?>>
            <?php echo $employee["last_name"] . ", " . $employee["first_name"]; ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>
