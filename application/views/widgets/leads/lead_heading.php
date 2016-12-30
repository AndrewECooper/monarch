<div class="panel-title pull-left" style="margin-right: 20px">
    <?php echo $lead["company_name"]; ?>
</div>

<div class="panel-title pull-left">
    (<?php echo $lead["line_of_business"]; ?>)
</div>

<button type="button" class="btn btn-info pull-right btn-xs" id="btn-stage">
    <?php echo $lead["stage"]; ?>
</button>
<button type="button" class="btn btn-info pull-right btn-xs" id="btn-status"
    style="margin-right: 5px">
    <?php echo $lead["status"]; ?>
</button>

<button type="button" class="btn btn-info btn-xs pull-right" id="btn-sales" style="margin-right: 5px">
    <?php echo $lead["salesman"]; ?> / <?php echo $lead["collector"]; ?>
</button>
<div class="clearfix"></div>
